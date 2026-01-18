<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\PendaftarModel;
use App\Models\ProgramModel;
use CodeIgniter\HTTP\ResponseInterface;

class Kelas extends BaseController
{
    public function index()
    {
        $pendaftarModel = new PendaftarModel();
        $user = session()->get();
        $pendaftar = $pendaftarModel->where('memberId', $user['user_id'])->findAll();
        $pendaftar = $pendaftarModel
            ->select('pendaftar_kelas.*, kelas.nama_kelas')
            ->join('kelas', 'kelas.kelasId = pendaftar_kelas.kelasId', 'left')
            ->where('pendaftar_kelas.memberId', $user['user_id'])
            ->findAll();

        // dd($pendaftar);

        $data = [
            'data' => $pendaftar
        ];
        return view('member-page/kelas', $data);
    }

    public function detailKelas()
    {
        $pendaftarModel = new PendaftarModel();
        $pendaftarId = $this->request->getGet('id');
        $user = session()->get();

        // ambil data dengan join
        $pendaftar = $pendaftarModel
            ->select('pendaftar_kelas.*, kelas.nama_kelas, program.nama as nama_program, program.harga, kelas.deskripsi')
            ->join('kelas', 'kelas.kelasId = pendaftar_kelas.kelasId', 'left')
            ->join('program', 'kelas.programId = program.programId', 'left')
            ->where('pendaftar_kelas.pendaftarId', $pendaftarId)
            ->where('pendaftar_kelas.memberId', $user['user_id'])
            ->first(); // ambil 1 row

        // debug
        // dd($pendaftar);

        $data = ['data' => $pendaftar];

        return view('member-page/detail-kelas', $data);
    }


    public function daftarProgram()
    {
        $program = new ProgramModel();
        $list = $program->findAll();
        $data = ['data' => $list];
        return view('member-page/daftar-kelas', $data);
    }

    public function daftarKelas()
    {
        $kelas = new KelasModel();
        $programId = $this->request->getGet();


        $list = $kelas->where('programId', $programId['produk_id'])->findAll();


        return $this->response->setJSON([
            'status' => 'ok',
            'data' => $list
        ]);
    }

    public function pendaftarStore()
    {
        $json = $this->request->getJSON(true);

        if (!isset($json['harga'])) {
            return $this->response->setJSON([
                'error' => 'Harga tidak ditemukan'
            ])->setStatusCode(400);
        }

        $user = session()->get();

        $pendaftarModel = new PendaftarModel();

        $pendaftarId = $pendaftarModel->insert([
            'kelasId' => $json['kelas_id'],
            'memberId' => $user['user_id'],
            'isApproved' => '1',
            'date_registration' => date('Y-m-d'),
            'time_registration' => date('H:i:s'),
        ], true);

        // return $pendaftarId;
        return $this->response->setJSON([
            'status' => true,
            'pendaftar_id' => $pendaftarId,
            'redirect' => '/kelas'
        ]);
    }

    public function getSnapToken()
    {
        // Ambil JSON body
        $json = $this->request->getJSON(true);

        if (!isset($json['harga'])) {
            return $this->response->setJSON([
                'error' => 'Harga tidak ditemukan'
            ])->setStatusCode(400);
        }

        // ⚠️ JANGAN percaya frontend (idealnya ambil dari DB)
        $harga = (int) $json['harga'];

        $pendaftarId = $json['pendaftar_id'];

        $payload = [
            'transaction_details' => [
                'order_id' => $pendaftarId, // HARUS UNIK
                'gross_amount' => $harga,
            ],
            'credit_card' => [
                'secure' => true,
            ],
        ];

        $client = new \GuzzleHttp\Client();

        $response = $client->post(
            'https://app.sandbox.midtrans.com/snap/v1/transactions',
            [
                'headers' => [
                    'Accept'        => 'application/json',
                    'Authorization' => 'Basic U0ItTWlkLXNlcnZlci1HeDFCMnhnWjdqbVhld1NCNXEyNmFTdGI6',
                    'Content-Type'  => 'application/json',
                ],
                'json' => $payload, // ✅ lebih aman dari body manual
            ]
        );

        $result = json_decode($response->getBody(), true);


        return $this->response->setJSON([
            'token' => $result['token']
        ]);
    }

    public function search()
    {
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(403);
        }

        $keyword = $this->request->getGet('q');

        $model = new \App\Models\ProgramModel();

        if ($keyword) {
            $data = $model->search($keyword);
        } else {
            $data = [];
        }

        return $this->response->setJSON($data);
    }
}
