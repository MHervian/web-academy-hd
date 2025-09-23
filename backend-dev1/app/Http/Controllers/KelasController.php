<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelasController extends Controller
{
	/**
	 * Display all kelas page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all members
		$kelas = KelasModel::all();

		return view('kelas', compact('kelas'));
	}

	/**
	 * Display form create kelas page..
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		return view('create-kelas');
	}

	/**
	 * Store new kelas handler..
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

			KelasModel::create([
				'username' => $data['username'],
				'password' => Hash::make($data['password']),
			]);

			return redirect()->route('user')->with('success', 'success: New kelas stored.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('user')->with('error', 'Gagal membuat kelas. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('user')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}

	/**
	 * Display edit kelas page
	 */
	public function edit() {}

	/**
	 * Update kelas handler..
	 */
	public function update() {}

	/**
	 * Delete kelas handler..
	 */
	public function delete() {}
}
