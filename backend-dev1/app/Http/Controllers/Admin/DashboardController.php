<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/**
	 * Admin Dashboard page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		return view('admin-dashboard');
	}
}
