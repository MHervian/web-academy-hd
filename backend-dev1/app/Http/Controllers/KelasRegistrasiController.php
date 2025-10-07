<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\RegistrasiKelasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasRegistrasiController extends Controller
{
	/**
	 * Display all kelas registrasi page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all kelas with total count of member class registration..
		// $kelas = KelasModel::all();
		$kelas = KelasModel::leftJoin('registrasi_kelas', 'registrasi_kelas.kelasId', '=', 'kelas.kelasId')
			->select('kelas.kelasId', 'kelas.nama_kelas', 'kelas.date_open', 'kelas.date_close', 'kelas.kapasitas', DB::raw('COUNT(registrasi_kelas.kelasId) as total_registered'))
			->groupBy('kelas.kelasId', 'kelas.nama_kelas', 'kelas.date_open', 'kelas.date_close', 'kelas.kapasitas')
			->get();

		return view('kelas-registrasi', compact('kelas'));
	}

	/**
	 * Display informasi registrasi kelas..
	 */
	public function detail(Request $request, $kelasId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get kelas detail by kelasId
		$kelas = KelasModel::find($kelasId);
		// Get data registrasi by kelasId
		$registrasi = RegistrasiKelasModel::where('kelasId', $kelasId)->get();

		return view('kelas-registrasi-detail', compact('kelas', 'registrasi'));
	}

	/**
	 * Update data registrasi handler..
	 */
	public function update() {}
}
