<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Database\QueryException;
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
	public function detail(Request $request, $id)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get member by id
		$member = MemberModel::find($id);

		return view('member-detail', compact('member'));
	}

	/**
	 * Edit member page..
	 */
	public function edit() {}

	/**
	 * Delete member data handler..
	 */
	public function delete(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'memberId' => 'required|string|max:12',
			]);

			MemberModel::destroy($data['memberId']);

			return redirect()->route('member')->with('success', 'success: Hapus member.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('member')->with('error', 'Gagal hapus member. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('member')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}
}
