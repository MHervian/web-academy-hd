<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Akun extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $user = session()->get();

        $userData = $userModel->find($user['user_id']);

        // dd($userData);

        $data = ['data' => $userData];

        return view('member-page/akun', $data);
    }
}
