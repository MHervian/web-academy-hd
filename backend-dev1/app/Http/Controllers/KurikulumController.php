<?php

namespace App\Http\Controllers;

use App\Models\KurikulumModel;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
	/**
	 * Display kurikulum page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all kurikulum
		$kurikulums = KurikulumModel::all();

		return view('kurikulum', compact('kurikulums'));
	}

	/**
	 * Display kurikulum detail page..
	 */
	public function detail(Request $request, $idKurikulum)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get kurikulum by id
		$kurikulum = KurikulumModel::find($idKurikulum);

		return view('kurikulum-detail', compact('kurikulum'));
	}

	/**
	 * Display form upload kurikulum page..
	 */
	public function create() {}

	/**
	 * Approve kurikulum handler..
	 */
	public function approve() {}

	/**
	 * Store kurikulum handler
	 */
	public function store() {}

	/**
	 * Update kurikulum handler..
	 */
	public function update() {}

	/**
	 * Delete kurikulum handler..
	 */
	public function delete() {}
}
