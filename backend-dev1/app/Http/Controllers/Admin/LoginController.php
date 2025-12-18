<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	/**
	 * Display login page
	 */
	public function index(Request $request)
	{
		// cek login session
		if ($request->session()->has('login_user')) {
			return redirect()->route('admin-dashboard');
		}

		// display login page
		return view('login');
	}

	/**
	 * Login process
	 */
	public function login(Request $request)
	{
		$data = $request->validate([
			'username' => 'required|string|max:50',
			'password' => 'required',
		]);

		// Cari username 
		$user = DB::table('private_user')
			->where('username', $data['username'])
			->first();

		if (!$user) {
			// User tidak ditemukan
			throw ValidationException::withMessages([
				'username' => ['Username tidak ditemukan.'],
			]);
		}

		if (! Hash::check($data['password'], $user->password)) {
			// Password salah
			throw ValidationException::withMessages([
				'password' => ['Password salah.'],
			]);
		}

		// Set session login
		$request->session()->put('login_user', [
			'username' => $user->username,
		]);

		// Ke admin dashboard
		return redirect()->route('admin-dashboard');
	}

	/**
	 * Logout process
	 */
	public function logout(Request $request)
	{
		$request->session()->forget('login_user');
		$request->session()->flush(); // hapus semua data session

		return redirect()->route('login'); // redirect ke login page
	}

	/**
	 * Create new private user
	 */
	public function create() {}

	/**
	 * Update private user
	 */
	public function update() {}

	/**
	 * Delete private user
	 */
	public function delete() {}
}
