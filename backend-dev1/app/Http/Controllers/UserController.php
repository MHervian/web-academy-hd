<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\PrivateUserModel;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
	/**
	 * Create user admin page...
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Read all users
		$users = PrivateUserModel::all();

		return view('create-user', compact('users'));
	}

	/**
	 * Store new user handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'username' => 'required|string|max:50',
				'password' => 'required',
			]);

			PrivateUserModel::create([
				'username' => $data['username'],
				'password' => Hash::make($data['password']),
			]);

			return redirect()->route('user')->with('success', 'success: New user stored.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('user')->with('error', 'Gagal membuat user. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('user')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}

	/**
	 * Update user handler..
	 */
	public function update() {}

	/**
	 * Delete user handler..
	 */
	public function delete() {}
}
