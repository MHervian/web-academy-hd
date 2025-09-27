<?php

namespace App\Http\Controllers;

use App\Models\ProgramModel;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
	/**
	 * Display list of program/course page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$programs = ProgramModel::all();

		return view('program', compact('programs'));
	}

	/**
	 * Display detail of program/course page..
	 */
	public function detail(Request $request, $programId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$program = ProgramModel::find($programId);

		return view('program-detail', compact('program'));
	}

	/**
	 * Display form create program/course page..
	 */
	public function create(Request $request) {}

	/**
	 * Store data program/course handler..
	 */
	public function store() {}

	/**
	 * Update data program/course handler..
	 */
	public function update() {}

	/**
	 * Delete data program/course handler..
	 */
	public function delete() {}
}
