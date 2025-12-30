<?php

namespace App\Controllers;

use Google\Client as GoogleClient;
use Google\Service\Oauth2 as GoogleOauth2;

class Auth extends BaseController
{
    protected $googleClient;

    public function __construct()
    {
        $this->googleClient = new GoogleClient();
        $this->googleClient->setClientId(env('google.clientID'));
        $this->googleClient->setClientSecret(env('google.clientSecret'));
        $this->googleClient->setRedirectUri(env('google.redirectUri'));
        $this->googleClient->addScope("email");
        $this->googleClient->addScope("profile");
    }

    public function login()
    {
        $data['login_url'] = $this->googleClient->createAuthUrl();
        return view('member-page/user-access', $data);
    }

    public function register()
    {
        $data['login_url'] = $this->googleClient->createAuthUrl();
        return view('member-page/user-registration', $data);
    }

    public function callback()
    {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));

        if (!isset($token['error'])) {
            $this->googleClient->setAccessToken($token['access_token']);
            $googleService = new GoogleOauth2($this->googleClient);
            $userRawData = $googleService->userinfo->get();

            $data = $userRawData;

            // Di dalam method callback()
            $userModel = new \App\Models\UserModel();

            // Cek apakah email sudah terdaftar
            $existingUser = $userModel->where('email', $data->email)->first();

            if ($existingUser) {
                // Jika user sudah ada, update google_id-nya (jika sebelumnya login manual)
                // $userModel->update($existingUser['id'], [
                //     'google_id' => $data->id,
                //     'avatar'    => $data->picture
                // ]);
                // $userId = $existingUser['id'];
            } else {
                // Jika user baru, simpan ke database
                $userId = $userModel->insert([
                    'name'  => $data->name,
                    'email'     => $data->email,
                    // 'google_id' => $data->id,
                    // 'avatar'    => $data->picture,
                    'password'  => password_hash(bin2hex(random_bytes(10)), PASSWORD_DEFAULT) // Password acak aman
                ]);
            }

            // Simpan ke session atau database
            $userData = [
                'name'  => $userRawData->name,
                'email' => $userRawData->email,
                'pic'   => $userRawData->picture,
                'isLoggedIn' => true,
            ];
            session()->set($userData);

            // dd($userRawData);

            return redirect()->to('/beranda-member');
        }

        return redirect()->to('/auth/login')->with('error', 'Login Gagal');
    }

    public function loginWithEmail()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('errors', [
                'Email tidak terdaftar'
            ]);
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('errors', [
                'Password salah'
            ]);
        }

        session()->set([
            'user_id' => $user['id'],
            'email'   => $user['email'],
            'isLogin' => true,
        ]);

        return redirect()->to('/beranda-member');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
