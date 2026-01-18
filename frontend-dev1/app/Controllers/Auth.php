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
		$locale = service('request')->getLocale();

		session()->set('auth_locale', $locale);
		$data['login_url'] = $this->googleClient->createAuthUrl();
		return view('member-page/user-access', $data);
	}

	public function register()
	{
		$locale = service('request')->getLocale();

		session()->set('auth_locale', $locale);
		$data['login_url'] = $this->googleClient->createAuthUrl();
		return view('member-page/user-registration', $data);
	}

	// public function callback()
	// {
	// 	$token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));

	// 	if (!isset($token['error'])) {
	// 		$this->googleClient->setAccessToken($token['access_token']);
	// 		$googleService = new GoogleOauth2($this->googleClient);
	// 		$userRawData = $googleService->userinfo->get();

	// 		$data = $userRawData;

	// 		// Di dalam method callback()
	// 		$userModel = new \App\Models\UserModel();

	// 		// Cek apakah email sudah terdaftar
	// 		$existingUser = $userModel->where('email', $data->email)->first();

	// 		$userId = '';

	// 		if ($existingUser) {
	// 			// Jika user sudah ada, update google_id-nya (jika sebelumnya login manual)
	// 			// $userModel->update($existingUser['id'], [
	// 			//     'google_id' => $data->id,
	// 			//     'avatar'    => $data->picture
	// 			// ]);
	// 			$userId = $existingUser['memberId'];
	// 		} else {
	// 			// Jika user baru, simpan ke database
	// 			$user = $userModel->insert([
	// 				// 'name'  => $data->name,
	// 				// 'email'     => $data->email,
	// 				// 'google_id' => $data->id,
	// 				// 'avatar'    => $data->picture,
	// 				'username' => $data->name,
	// 				'email'     => $data->email,
	// 				'password'  => password_hash(bin2hex(random_bytes(10)), PASSWORD_DEFAULT), // Password acak aman
	// 				'date_registration' => '20260107',
	// 				'metode' => 'google',
	// 			]);

	// 			$userId = $user['memberId'];
	// 		}

	// 		// Simpan ke session atau database
	// 		$userData = [
	// 			'user_id' => $userId,
	// 			'name'  => $userRawData->name,
	// 			'email' => $userRawData->email,
	// 			'pic'   => $userRawData->picture,
	// 			'isLoggedIn' => true,
	// 		];
	// 		session()->set($userData);

	// 		return redirect()->to('/beranda-member');
	// 	}

	// 	return redirect()->to('/auth/login')->with('error', 'Login Gagal');
	// }

	public function callback()
	{
		$code = $this->request->getVar('code');

		if (! $code) {
			return redirect()->to('/auth/login')->with('error', 'Code tidak valid');
		}

		// Ambil access token dari Google
		$token = $this->googleClient->fetchAccessTokenWithAuthCode($code);

		if (isset($token['error'])) {
			return redirect()->to('/' . service('request')->getLocale() . '/auth/login')->with('error', 'Login Google gagal');
		}

		// Set access token
		$this->googleClient->setAccessToken($token['access_token']);

		// Ambil data user Google
		$googleService = new GoogleOauth2($this->googleClient);
		$userRawData   = $googleService->userinfo->get();

		// Model user
		$userModel = new \App\Models\UserModel();

		// Cari user berdasarkan email
		$existingUser = $userModel
			->where('email', $userRawData->email)
			->first();

		if ($existingUser) {
			// User sudah ada
			$userId = $existingUser['memberId'];
		} else {
			// User baru → insert & ambil insert ID
			$userId = $userModel->insert([
				'username'          => $userRawData->name,
				'email'             => $userRawData->email,
				'password'          => password_hash(bin2hex(random_bytes(10)), PASSWORD_DEFAULT),
				'date_registration' => date('Ymd'),
				'metode'            => 'google',
			], true); // 🔴 return insert ID
		}

		// 🔴 WAJIB regenerate session setelah login
		session()->regenerate();

		// Simpan data login ke session
		session()->set([
			'user_id'    => $userId,
			'name'       => $userRawData->name,
			'email'      => $userRawData->email,
			'pic'        => $userRawData->picture,
			'isLoggedIn' => true,
		]);

		// Redirect ke halaman member
		$locale = session('auth_locale') ?? 'id';
		// dd($locale);
		
		service('request')->setLocale($locale);
		return redirect()->to('/' . $locale . '/beranda-member');
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
			'user_id' => $user['memberId'],
			'email'   => $user['email'],
			'isLogin' => true,
		]);

		$locale = session('auth_locale') ?? 'id';

		service('request')->setLocale($locale);
		return redirect()->to('/' . $locale . '/beranda-member');
	}

	public function logout()
	{
		session()->destroy();
		$locale = session('auth_locale') ?? 'id';

		service('request')->setLocale($locale);
		return redirect()->to('/' . $locale . '/auth/login');
	}
}
