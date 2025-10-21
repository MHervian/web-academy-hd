<?php

namespace App\Http\Controllers;

use App\Models\PengajarModel;
use Illuminate\Database\QueryException;
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
	public function detail(Request $request, $userId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Query pengajar by id
		$pengajar = PengajarModel::where('userId', $userId)->get();
		// Query kelas pengajar
		$kelas = [];

		return view('pengajar-detail', compact('pengajar', 'kelas'));
	}

	/**
	 * Display form insert pengajar page..
	 */
	public function register(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		return view('pengajar-registrasi');
	}

	/**
	 * Store data registrasi pengajar handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// do store data form input of pengajar disini..
	}

	/**
	 * Display approval pengajar page..
	 */
	public function approval(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all pengajar 
		$pengajar = PengajarModel::where('isApprove', null)->get();

		return view('pengajar-approval', compact('pengajar'));
	}

	/**
	 * Store approval data pengajar handler..
	 */
	public function storeApproval(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Do approve or reject pengajar..
		try {
			$userId = $request->post('userId')[0];
			$btnApprove = $request->post('btnApprove');
			$btnReject = $request->post('btnReject');

			if (empty($userId) || $userId == null || $userId == '') {
				return redirect()->back()->with('error', 'UserId kosong');
			}

			if ($btnApprove != null) {
				$isApprove = '1';
			} else if ($btnReject != null) {
				$isApprove = '0';
			} else {
				return redirect()->back()->with('error', 'Perintah approval tidak dikenal');
			}

			PengajarModel::where([
				'userId' => $userId,
			])->update([
				'date_approval' => now()->format('Y-m-d'),
				'isApprove' => $isApprove,
				'isActive' => '1',
			]);

			return redirect()->route('approve-pengajar')->with('success', 'Approval/Reject pengajar berhasil');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('approve-pengajar')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('approve-pengajar')->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Process final approval data pengajar handler..
	 */
	public function finishApproving(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Do finalizing approval of all pengajar disini..
		try {
			// 
			return redirect()->back()->with('success', 'Success submit semua pendaftaran pengajar');
		} catch (QueryException $e) {
			return redirect()->back()->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Update pengajar handler..
	 */
	public function update() {}

	/**
	 * Delete pengajar handler..
	 */
	public function delete() {}
}
