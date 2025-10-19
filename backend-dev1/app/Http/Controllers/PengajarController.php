<?php

namespace App\Http\Controllers;

use App\Models\PengajarModel;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
	/**
	 * Display all pengajar page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Query all pengajar
		$pengajar = PengajarModel::where('isApprove', '1')->get();

		return view('pengajar', compact('pengajar'));
	}

	/**
	 * Display pengajar detail page..
	 */
	public function detail(Request $request, $pengajarId) {}

	/**
	 * Display form insert pengajar page..
	 */
	public function create(Request $request) {}

	/**
	 * Display approval pengajar page..
	 */
	public function approval(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all pengajar 
		$pengajar = PengajarModel::all();

		return view('pengajar-approval', compact('pengajar'));
	}

	/**
	 * Store pengajar handler..
	 */
	public function store() {}

	/**
	 * Update pengajar handler..
	 */
	public function update() {}

	/**
	 * Delete pengajar handler..
	 */
	public function delete() {}
}
