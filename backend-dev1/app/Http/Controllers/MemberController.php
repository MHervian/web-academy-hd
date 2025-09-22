<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Http\Request;

class MemberController extends Controller
{
	/**
	 * Display all member page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all members
		$members = MemberModel::all();

		return view('member', compact('members'));
	}

	/**
	 * Display member detail page..
	 */
	public function detail(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		return view('member-detail');
	}
}
