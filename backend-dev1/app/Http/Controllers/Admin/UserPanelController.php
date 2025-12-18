<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\PrivateUserModel;
use Illuminate\Database\QueryException;

class UserPanelController extends Controller
{
	/**
	 * Display all user page...
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Read all users
		$users = PrivateUserModel::all();

		return view('user', compact('users'));
	}

	/**
	 * Display form input user page..
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		return view('create-user');
	}

	/**
	 * Store new user handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$data = $request->validate([
			'username' => 'required|string|max:50',
			'password' => 'required',
			'level'         => 'nullable',
		]);

		try {
			PrivateUserModel::create([
				'username' => $data['username'],
				'password' => Hash::make($data['password']),
				'lvl'             => $data['level'],
			]);

			return redirect()->route('user')->with('success', 'success: New user stored.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->back()->with('error', 'Gagal membuat user. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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
