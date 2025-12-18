<?php

namespace App\Http\Controllers;

use App\Models\BacklogKurikulumModel;
use App\Models\FileKurikulumModel;
use App\Models\KurikulumModel;
use App\Models\PrivateUserModel;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
		// Get user pic of the kurikulum
		$user = PrivateUserModel::where('userId', $kurikulum->pic)->get();

		return view('kurikulum-detail', compact('kurikulum', 'kurikulumFiles', 'backlogs', 'user'));
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
	 * Display form input feedback kurikulum page..
	 */
	public function inputFeedback(Request $request, $kurikulumId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$kurikulum = KurikulumModel::find($kurikulumId);

		$seqno = DB::table('backlog_kurikulum')
			->where('kurikulumId', $kurikulumId)
			->count() + 1;

		$isFirstFeedback = 0;
		if ($seqno - 1 == 0) {
			$isFirstFeedback = 1;
		}

		return view('kurikulum-input-feedback', compact('kurikulum', 'seqno', 'isFirstFeedback'));
	}

	/**
	 * Display form input new file upload page..
	 */
	public function uploadFile(Request $request, $kurikulumId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Count seqno
		$seqno = DB::table('backlog_kurikulum')
			->where('kurikulumId', $kurikulumId)
			->count() + 1;

		return view('kurikulum-edit-file', compact('seqno', 'kurikulumId'));
	}

	/**
	 * Display form edit kurikulum description page..
	 */
	public function edit(Request $request, $kurikulumId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$kurikulum = KurikulumModel::find($kurikulumId);
		$privateUsers = PrivateUserModel::all();

		return view('kurikulum-edit', compact('kurikulum', 'privateUsers'));
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

			return redirect()->route('kurikulum')->with('success', 'Kurikulum berhasil diupload');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('kurikulum')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('kurikulum')->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Store feedback kurikulum handler..
	 */
	public function storeFeedback(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$data = $request->validate([
			'kurikulumId' => 'required',
			'seqno' 			=> 'required',
			'deskripsi' 	=> 'required|string',
			'isFirstFeedback' => 'required',
		]);

		try {
			$deskripsi = null;
			if (trim($data['deskripsi']) != '') {
				$deskripsi = $data['deskripsi'];
			} else {
				return redirect()->route('input-feedback-kurikulum', ['idKurikulum', $data['kurikulumId']])
					->with('error', 'Deskripsi feedback tidak boleh kosong.');
			}

			// Store to file_kurikulum
			BacklogKurikulumModel::create([
				'kurikulumId' => $data['kurikulumId'],
				'seqno' => $data['seqno'],
				'deskripsi' => $deskripsi,
			]);

			// Check if this feedback first time..
			if ($data['isFirstFeedback'] == '1') {
				$kurikulum = KurikulumModel::find($data['kurikulumId']);
				$kurikulum->isApprove = '1';
				$kurikulum->save();
			}

			return redirect()->route('kurikulum-detail', ['idKurikulum' => $data['kurikulumId']])
				->with('success', 'Feedback kurikulum berhasil ditambah');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('input-feedback-kurikulum', ['idKurikulum', $data['kurikulumId']])
				->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('input-feedback-kurikulum', ['idKurikulum', $data['kurikulumId']])
				->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Process upload file handler..
	 */
	public function storeFile(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$data = $request->validate([
			'kurikulumId' => 'required',
			'seqno' 			=> 'required',
			'fileKurikulum' => 'required|file|max:2048', // max 2MB
		]);

		try {
			$file = $request->file('fileKurikulum');
			$ext = $file->getClientOriginalExtension();

			// Create and renaming file 
			$filename = "file_" . Str::random(20) . '_' . time() . '.' . $ext;

			// Store to file_kurikulum database
			FileKurikulumModel::create([
				'kurikulumId' => $data['kurikulumId'],
				'seqno' => $data['seqno'],
				'filename' => $filename,
			]);

			// Store file to storage/app/kurikulum
			$file->storeAs('kurikulum', $filename);

			return redirect()->route('kurikulum-detail', ['idKurikulum' => $data['kurikulumId']])
				->with('success', 'Upload file kurikulum berhasil');
		} catch (QueryException $e) {
			// Database error
			return redirect()->back()->with('error', 'Database Error:' . $e->getMessage());
		} catch (\Exception $e) {
			// Other error
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
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
	public function approve(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$btnReject = $request->post('btnReject');
			$btnApprove = $request->post('btnApprove');
			$kurikulumId = $request->post('kurikulumId');
			$command = null;

			if ($btnReject != null) {
				$command = '2'; // Reject kurikulum..
			} else if ($btnApprove != null) {
				$command = '3'; // Approve kurikulum..
			} else {
				return redirect()->back()
					->with('error', 'Perintah approve lain dilarang. Tekan tombol Reject atau Button saja.');
			}

			// Update data..
			$kurikulum = KurikulumModel::find($kurikulumId);
			$kurikulum->isApprove = $command;
			$kurikulum->date_approve = now()->format('Y-m-d');
			$kurikulum->save();

			return redirect()->back()->with('success', 'Kurikulum berhasil diapprove');
		} catch (QueryException $e) {
			// Database error..
			return redirect()->back()->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors..
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Update kurikulum handler..
	 */
	public function update(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$data = $request->validate([
			'kurikulumId' => 'required',
			'nama' 				=> 'required|string|max:255',
			'deskripsi' 	=> 'required|string',
			// 'date_input' 	=> 'required',
			'pic' 				=> 'required',
		]);

		try {
			$deskripsi = null;
			if (trim($data['deskripsi']) != '') {
				$deskripsi = $data['deskripsi'];
			} else {
				return redirect()->route('edit-kurikulum', ['kurikulumId', $data['kurikulumId']])
					->with('error', 'Deskripsi tidak boleh kosong');
			}

			// Store to file_kurikulum
			$kurikulum = KurikulumModel::find($data['kurikulumId']);
			$kurikulum->nama = $data['nama'];
			$kurikulum->deskripsi = $deskripsi;
			$kurikulum->pic = $data['pic'];
			$kurikulum->save();

			return redirect()->route('kurikulum-detail', ['idKurikulum' => $data['kurikulumId']])
				->with('success', 'Data kurikulum berhasil diubah');
		} catch (QueryException $e) {
			// Database error
			return redirect()->back()
				->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->back()
				->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Delete kurikulum handler..
	 * [NOTE] This is HARD DELETE.
	 */
	public function delete(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			// Read post data..
			$kurikulumId = $request->post('kurikulumId');
			$nama = $request->post('nama');

			// Query all filenames..
			$kurikulumFiles = FileKurikulumModel::where('kurikulumId', $kurikulumId)->get();
			if (count($kurikulumFiles) > 0) {
				// Next, proceed to destroy files..
				// Destroy files..
				foreach ($kurikulumFiles as $kurikulumFile) {
					$filename = $kurikulumFile->filename;
					$path = "kurikulum/" . $filename;
					Storage::delete($path);
				}
			}

			// Delete kurikulum ..
			$kurikulum = KurikulumModel::find($kurikulumId);
			$kurikulum->delete();

			return redirect()->route('kurikulum')
				->with('success', 'Hapus kurikulum: "' . $nama . '" Berhasil');
		} catch (QueryException $e) {
			// Database error..
			return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other error..
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}
}
