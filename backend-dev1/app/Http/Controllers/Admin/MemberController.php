<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasModel;
use App\Models\MemberModel;
use App\Models\SertifikatModel;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

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
		// $members = MemberModel::all();
		$members = MemberModel::orderBy('created_at', 'desc')
			->paginate(10);

		// return view('member', compact('members'));
		return view('member/index', compact('members'));
	}

	/**
	 * Display filtered member page..
	 */
	public function search(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}
		$query = MemberModel::query();

		// 🔍 Search username
		if ($request->filled('keyword')) {
			$query->where('username', 'LIKE', '%' . $request->keyword . '%');
		}

		// 🔽 Filter metode daftar
		if ($request->filled('metode') && $request->metode !== 'all') {
			$query->where('metode', $request->metode);
		}

		$members = $query->orderBy('created_at', 'desc')
			->paginate(10)
			->withQueryString();

		return view('member/index', compact('members'));
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

		// return view('member-detail', compact('member', 'kelas', 'sertifikats'));
		return view('member/detail', compact('member', 'kelas', 'sertifikats'));
	}

	/**
	 * Create new member page...
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		return view('member/create');
	}

	/**
	 * Store new member handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'username' => 'required|string|max:255',
				'email' => 'required|required|max:255',
				'newPassword' => 'string|required|max:255',
				'metode' => 'string|required',
			]);

			// Store to program
			MemberModel::create([
				'username' 					=> $data['username'],
				'email' 						=> $data['email'],
				'password'          => Hash::make($data['newPassword']),
				'metode'						=> 'email',
				'date_registration' => now()->toDateString(),
			]);

			return redirect()->route('member')->with('success', 'Member Baru Berhasil Dibuat');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('member')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('member')->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Reset password page..
	 */
	public function resetPassword(Request $request, $memberId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get member by id
		$member = MemberModel::find($memberId);

		return view('member/reset-password', compact('member'));
	}

	/**
	 * Edit member page..
	 */
	public function edit(Request $request, $memberId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$member = MemberModel::find($memberId);

		// return view('program-detail', compact('program', 'kurikulum'));
		return view('member/edit', compact('member'));
	}

	/**
	 * Update reset password member handler..
	 */
	public function updateResetPassword(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'memberId' => 'required',
				'newPassword' => 'required|string',
				'confirmPassword' => 'required|string',
			]);

			// var_dump($request);
			// return;
			$update = [];
			$update['password'] = $data['newPassword'];

			// Update member password
			MemberModel::where('memberId', $data['memberId'])->update($update);

			return redirect()->route('member-detail', ['id' => $data['memberId']])->with('success', 'Reset Password Baru Berhasil Disimpan.');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('member')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('member')->with('error', 'Error: ' . $e->getMessage());
		}
	}

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
