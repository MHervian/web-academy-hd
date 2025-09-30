<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use Illuminate\Http\Request;

class KelasRegistrasiController extends Controller
{
	/**
	 * Display all kelas registrasi page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all members
		$kelas = KelasModel::all();

		return view('kelas-registrasi', compact('kelas'));
	}

	/**
	 * Display informasi registrasi kelas..
	 */
	public function informasi() {}

	/**
	 * Update data registrasi handler..
	 */
	public function update() {}
}
