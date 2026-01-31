<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotificationModel;
use CodeIgniter\HTTP\ResponseInterface;

class Notification extends BaseController
{
    public function index()
    {
        //$notiModel = new NotificationModel();

        //$notif = $notiModel->findAll();

        // Dummy data
        $data = [
            [
                'noteId' => 1,
                'judul' => 'Order Berhasil',
                'deskripsi' => 'Order #INV-001 berhasil diproses',
                'is_read' => false,
                'date_created' => '2026-01-30 09:15:00',
                'date_post' => '2026-01-30 09:15:00'
            ],
            [
                'noteId' => 2,
                'judul' => 'Pembayaran Diterima',
                'deskripsi' => 'Pembayaran invoice INV-002 sudah diterima',
                'is_read' => true,
                'date_created' => '2026-01-29 20:40:00',
                'date_post' => '2026-01-29 20:40:00'
            ],
            [
                'noteId' => 3,
                'judul' => 'Promo Spesial',
                'deskripsi' => 'Diskon 20% untuk transaksi hari ini',
                'is_read' => false,
                'date_created' => '2026-01-28 08:00:00',
                'date_post' => '2026-01-28 08:00:00'
            ]
        ];


        $data = [
            'notifikasi' => $data
        ];

        // dd($data);
        return view('member-page/notifikasi', $data);
    }

    public function detail($id)
    {
        //$notiModel = new NotificationModel();

        //$notif = $notiModel->find($id);

        // dd($notif);

        $data =
            [
                'noteId' => 1,
                'judul' => 'Order Berhasil',
                'deskripsi' => 'Order #INV-001 berhasil diproses',
                'is_read' => false,
                'date_created' => '2026-01-30 09:15:00',
                'date_post' => '2026-01-30 09:15:00'
            ];


        $data = [
            'detail' => $data
        ];

        return view('member-page/notifikasi-detail', $data);
    }
}
