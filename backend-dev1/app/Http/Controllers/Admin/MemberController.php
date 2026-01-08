<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasModel;
use App\Models\MemberModel;
use App\Models\SertifikatModel;
use Illuminate\Database\QueryException;

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
	public function detail(Request $request, $memberId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get member by id
		$member = MemberModel::find($memberId);

		// Get all kelas that joined by member
		// $kelas = KelasModel::join('enrollment_kelas', 'enrollment_kelas.kelasId', '=', 'kelas.kelasId')
		// 	->select('kelas.kelasId', 'kelas.nama_kelas', 'kelas.nama_program', 'enrollment_kelas.isPass')
		// 	->where('enrollment_kelas.memberId', $memberId)
		// 	->get();
		$kelas = [];

		// Get all certificate of member
		// $sertifikats = SertifikatModel::where('memberId', $memberId)->get();
		$sertifikats = [];

		return view('member-detail', compact('member', 'kelas', 'sertifikats'));
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
