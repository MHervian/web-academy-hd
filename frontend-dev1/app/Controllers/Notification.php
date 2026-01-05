<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotificationModel;
use CodeIgniter\HTTP\ResponseInterface;

class Notification extends BaseController
{
    public function index()
    {
        $notiModel = new NotificationModel();

        $notif = $notiModel->findAll();

        $data = [
            'notifikasi' => $notif
        ];

        // dd($data);
        return view('member-page/notifikasi', $data);
    }

    public function detail($id)
    {
        $notiModel = new NotificationModel();

        $notif = $notiModel->find($id);

        // dd($notif);

        $data = [
            'detail' => $notif
        ];

        return view('member-page/notifikasi-detail', $data);
    }
}
