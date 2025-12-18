<?php

namespace App\Http\Controllers;

use App\Models\KurikulumModel;
use App\Models\ProgramModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

		// Get program data
		$program = ProgramModel::find($programId);

		// Get kurikulum data
		$kurikulum = KurikulumModel::where('kurikulumId', $program->kurikulumId)->get();

		return view('program-detail', compact('program', 'kurikulum'));
	}

	/**
	 * Display form create program/course page..
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all kurikulum
		$kurikulums = KurikulumModel::where('isApprove', '3')->get();

		return view('create-program', compact('kurikulums'));
	}

	/**
	 * Store data program/course handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'nama' => 'required|string|max:255',
				'deskripsi' => 'string|required',
				'kurikulumId' => 'required',
				'fileJadwal' => 'required|file|max:2048', // max 2MB
			]);

			$deskripsi = null;
			if (trim($data['deskripsi']) != '') {
				$deskripsi = $data['deskripsi'];
			}

			$file = $request->file('fileJadwal');
			$ext = $file->getClientOriginalExtension();

			// Create and renaming file 
			$filename = "file_" . Str::random(20) . '_' . time() . '.' . $ext;

			// Store to program
			ProgramModel::create([
				'nama' => $data['nama'],
				'deskripsi' => $deskripsi,
				'kurikulumId' => $data['kurikulumId'],
				'file_jadwal' => $filename,
			]);

			// Store ke storage/app/jadwal
			$file->storeAs('jadwal', $filename);

			return redirect()->route('program')->with('success', 'Program berhasil dibuat');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('program')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('program')->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * View file kurikulum handler..
	 */
	public function viewFile(Request $request, $filename)
	{
		$path = storage_path('app/jadwal/' . $filename);

		if (file_exists($path)) {
			return response()->file($path);
		}

		abort(404, 'File tidak ditemukan');
	}

	/**
	 * Update data program/course handler..
	 */
	public function update() {}

	/**
	 * Delete data program/course handler..
	 */
	public function delete(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'programId' => 'required',
			]);

			ProgramModel::destroy($data['programId']);

			return redirect()->route('program')->with('success', 'success: Hapus program.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('program')->with('error', 'Gagal hapus program. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('program')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}
}
