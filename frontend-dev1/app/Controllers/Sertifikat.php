<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sertifikat extends BaseController
{
    public function index()
    {
        //
        $list = [
            [
                "nomor_sertifikat" => "PGK-2024-0001",
                "nama_peserta" => "Andi Pratama",
                "program" => "Program Pendidikan Guru (Spesialis) Bahasa Korea",
                "harga" => 679000,
                "tanggal_mulai" => "2024-01-10",
                "tanggal_selesai" => "2024-03-10",
                "tanggal_terbit" => "2024-03-12",
                "durasi_jam" => 120,
                "status" => "aktif",
                "file_pdf" => "/dummy/sertifikat/pgk-2024-0001.pdf"
            ],
            [
                "nomor_sertifikat" => "TOPIK34-2024-0001",
                "nama_peserta" => "Andi Pratama",
                "program" => "Program Persiapan TOPIK (Level 3–4)",
                "harga" => 345000,
                "tanggal_mulai" => "2024-02-05",
                "tanggal_selesai" => "2024-02-28",
                "tanggal_terbit" => "2024-03-01",
                "durasi_jam" => 60,
                "status" => "aktif",
                "file_pdf" => "/dummy/sertifikat/topik34-2024-0001.pdf"
            ],
            [
                "nomor_sertifikat" => "BKTK-2024-0001",
                "nama_peserta" => "Andi Pratama",
                "program" => "Bahasa Korea untuk Tujuan Khusus",
                "harga" => 515000,
                "tanggal_mulai" => "2024-03-15",
                "tanggal_selesai" => "2024-04-15",
                "tanggal_terbit" => "2024-04-16",
                "durasi_jam" => 80,
                "status" => "aktif",
                "file_pdf" => "/dummy/sertifikat/bktk-2024-0001.pdf"
            ]
        ];


        $data = [
            'data' => $list
        ];

        return view('member-page/sertifikat', $data);
    }
}
