<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
	public function index()
	{
		//
	}

	public function store()
	{
		$userModel = new \App\Models\UserModel();

		$data = $this->request->getPost();

		$rules = [
			'username' => 'required',
			'email' => [
				// 'rules'  => 'required|valid_email|is_unique[users.email]',
				'rules'  => 'required|valid_email|is_unique[member.email]',
				'errors' => [
					'required'   => 'Email wajib diisi',
					'valid_email' => 'Format email tidak valid',
					'is_unique'  => 'Email sudah terdaftar',
				],
			],
			'password' => 'required|min_length[8]',
			'confirm_password' => 'required|matches[password]',
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$userId = $userModel->insert([
			// 'google_id' => $data->id,
			// 'avatar'    => $data->picture,
			'username' => $data['username'],
			'email'     => $data['email'],
			'password'  => password_hash($data['password'], PASSWORD_DEFAULT), // Password acak aman
			'date_registration' => '20260107',
			'metode' => 'email',
		]);

		$request = service('request');
		$locale  = $request->getLocale() ?? 'id';

		return redirect()
			->to($locale . '/auth/login')
			->with('success', 'Registrasi berhasil');
	}
}
