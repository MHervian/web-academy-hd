<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use App\Models\SertifikatModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SertifikatController extends Controller
{
	/**
	 * Display list of sertifikat page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all sertifikats
		$sertifikats = SertifikatModel::all();

		return view('sertifikat', compact('sertifikats'));
	}

	/**
	 * Display detail sertifikat page..
	 */
	public function detail(Request $request, $noSertifikat)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get sertifikat by noSertifikat
		$sertifikat = SertifikatModel::where('noSertifikat', $noSertifikat)->get();
		// Get member info with this sertifikat
		$member = MemberModel::where('memberId', $sertifikat[0]->memberId)->get();

		return view('sertifikat-detail', compact('sertifikat', 'member'));
	}

	/**
	 * Form upload sertifikat page..
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all members
		$members = MemberModel::all();

		return view('upload-sertifikat', compact('members'));
	}

	/**
	 * Edit data sertifikat page..
	 */
	public function edit() {}

	/**
	 * Store data sertifikat handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$request->validate([
				'memberId' => 'required',
				'noSertifikat' => 'required|string|max:50',
				'tanggal' => 'required',
				'filepdf' => 'required|file|max:2048', // max 2MB
			]);

			// var_dump($request);
			// return;

			$file = $request->file('filepdf');
			$ext = $file->getClientOriginalExtension();

			// Create and renaming file 
			$filename = "file_" . Str::random(20) . '_' . time() . '.' . $ext;

			// Store ke storage/app/sertifikat
			$file->storeAs('sertifikat', $filename);

			// Store to database 
			SertifikatModel::create([
				'memberId' => $request['memberId'],
				'noSertifikat' => $request['noSertifikat'],
				'date_issued' => $request['tanggal'],
				'filename' => $filename,
			]);

			return redirect()->route('sertifikat')->with('success', 'Sertifikat berhasil disimpan');
		} catch (QueryException $e) {
			// Database error
			return redirect()->route('sertifikat')->with('error', 'Database Error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other errors
			return redirect()->route('sertifikat')->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * View file sertifikat handler..
	 */
	public function viewFile(Request $request, $filename)
	{

		$path = storage_path('app/sertifikat/' . $filename);

		if (file_exists($path)) {
			return response()->file($path);
		}

		abort(404, 'File tidak ditemukan');
	}

	/**
	 * Update data sertifikat handler..
	 */
	public function update() {}

	/**
	 * Delete data sertifikat handler..
	 */
	public function delete() {}
}
