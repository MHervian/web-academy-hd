<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use Illuminate\Http\Request;

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
	 * Display edit kelas page
	 */
	public function edit() {}

	/**
	 * Store new kelas handler..
	 */
	public function store() {}

	/**
	 * Update kelas handler..
	 */
	public function update() {}

	/**
	 * Delete kelas handler..
	 */
	public function delete() {}
}
