<?php

namespace App\Http\Controllers;

use App\Models\BacklogKurikulumModel;
use App\Models\FileKurikulumModel;
use App\Models\KurikulumModel;
use App\Models\PrivateUserModel;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
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

		// Get kurikulum files by id
		$kurikulumFiles = FileKurikulumModel::where('kurikulumId', $idKurikulum)->get();
		// Get kurikulum backlog
		$backlogs = BacklogKurikulumModel::where('kurikulumId', $idKurikulum)->get();

		return view('kurikulum-detail', compact('kurikulum', 'kurikulumFiles', 'backlogs'));
	}

	/**
	 * Display form upload kurikulum page..
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$privateUsers = PrivateUserModel::all();

		return view('upload-kurikulum', compact('privateUsers'));
	}

	/**
	 * Store kurikulum handler
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'nama' => 'required|string|max:255',
				'deskripsi' => 'string|max:255',
				'date_input' => 'required',
				'pic' => 'required',
				'fileKurikulum' => 'required|file|max:2048', // max 2MB
			]);

			$deskripsi = null;
			if (trim($data['deskripsi']) != '') {
				$deskripsi = $data['deskripsi'];
			}

			$file = $request->file('fileKurikulum');
			$ext = $file->getClientOriginalExtension();

			// Create and renaming file 
			$filename = "file_" . Str::random(20) . '_' . time() . '.' . $ext;

			// Store to kurikulum
			$result = KurikulumModel::create([
				'nama' => $data['nama'],
				'deskripsi' => $deskripsi,
				'date_input' => $data['date_input'],
				'isApprove' => '0',
				'date_approve' => null,
				'pic' => $data['pic'],
			]);

			// Store ke storage/app/kurikulum
			$file->storeAs('kurikulum', $filename);

			// Store to file_kurikulum
			FileKurikulumModel::create([
				'kurikulumId' => $result->kurikulumId,
				'seqno' => 1,
				'filename' => $filename,
			]);

			return redirect()->route('sertifikat')->with('success', 'Kurikulum berhasil diupload');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('sertifikat')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('sertifikat')->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * View file kurikulum handler..
	 */
	public function viewFile(Request $request, $filename)
	{
		$path = storage_path('app/kurikulum/' . $filename);

		if (file_exists($path)) {
			return response()->file($path);
		}

		abort(404, 'File tidak ditemukan');
	}

	/**
	 * Approve kurikulum handler..
	 */
	public function approve() {}

	/**
	 * Update kurikulum handler..
	 */
	public function update() {}

	/**
	 * Delete kurikulum handler..
	 */
	public function delete() {}
}
