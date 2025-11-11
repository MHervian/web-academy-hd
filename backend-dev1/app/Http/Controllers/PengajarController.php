<?php

namespace App\Http\Controllers;

use App\Models\PengajarModel;
use App\Models\PrivateUserModel;
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

		// Get all null level of private_users..
		// [CODE NOTE] must validate authorization for this query...
		$users = PrivateUserModel::where('lvl', null)->get();

		return view('pengajar-registrasi', compact('users'));
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
		$data = $request->validate([
			'nama_lengkap' => 'required|string|max:255',
			'userId'			 => 'sometimes',
		]);

		try {
			PengajarModel::create([
				'userId' 				=> $data['userId'],
				'nama_pengajar' => $data['nama_lengkap'],
				'date_registration' => now()->format('Y-m-d'),
				'date_approval'	=> null,
				'isApprove'			=> null,
				'isActive'			=> null,
			]);

			return redirect()->back()->with('success', 'Submit data pengajuan pengajar sukses.');
		} catch (QueryException $e) {
			return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
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
		$pengajar = PengajarModel::where('isActive', null)->get();

		return view('pengajar-approval', compact('pengajar'));
	}

	/**
	 * Store approval data pengajar handler..
	 */
	public function approvePengajar(Request $request)
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
				return redirect()->back()->with('error', 'UserId pengajar kosong');
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

		try {
			// Get all pengajar userId which approved 'diterima'..
			$pengajarDiterima = PengajarModel::where([
				'isApprove' => '1',
				'isActive' => null,
			])->pluck('userId');

			if ($pengajarDiterima->isEmpty()) {
				return redirect()->back()->with('error', 'Beberapa atau semua data pengajar belum diterima/ditolak. Selesaikan pengisian approval ini.');
			}

			// Use all userId to change level to 'pengajar'..
			$userIdArray = array();
			foreach ($pengajarDiterima as $puserId) {
				array_push($userIdArray, $puserId);
			}
			PrivateUserModel::whereIn('userId', $userIdArray)->update(['lvl' => '2']);

			// Update pengajar 'diterima' to active..
			PengajarModel::whereIn('userId', $userIdArray)->update(['isActive' => '1']);

			// Delete rest pengajar data which approved 'ditolak'..
			PengajarModel::where('isApprove', '0')->delete();
			return redirect()->route('pengajar')->with('success', 'Success submit semua pendaftaran pengajar');
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
