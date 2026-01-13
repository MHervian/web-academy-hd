<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnrollmentKelasModel;
use App\Models\KelasModel;
use App\Models\PendaftarKelasModel;
use App\Models\RegistrasiKelasModel;
use Illuminate\Database\QueryException;
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
		// $kelas = KelasModel::leftJoin('pendaftar_kelas', 'pendaftar_kelas.kelasId', '=', 'kelas.kelasId')
		// 	->select('kelas.kelasId', 'kelas.nama_kelas', 'kelas.date_open', 'kelas.date_close', 'kelas.kapasitas', DB::raw('COUNT(pendaftar_kelas.kelasId) as total_registered'))
		// 	->groupBy('kelas.kelasId', 'kelas.nama_kelas', 'kelas.date_open', 'kelas.date_close', 'kelas.kapasitas')
		// 	->where('kelas.isKelasStart', '0')
		// 	->get();
		$kelas = KelasModel::all();

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
		// $registrasi = RegistrasiKelasModel::where('kelasId', $kelasId)->get();
		// $registrasi = RegistrasiKelasModel::join('member', 'member.memberId', '=', 'registrasi_kelas.memberId')
		$registrasi = PendaftarKelasModel::join('member', 'member.memberId', '=', 'pendaftar_kelas.memberId')
			->select(
				'member.memberId',
				'member.username',
				'member.email',
				'pendaftar_kelas.date_registration',
				'pendaftar_kelas.time_registration',
				'pendaftar_kelas.isApproved',
				'pendaftar_kelas.isPaid',
				'pendaftar_kelas.isPassed',
				'pendaftar_kelas.date_approval',
				'pendaftar_kelas.date_paid',
				'pendaftar_kelas.date_passed',
			)->get();

		return view('kelas-registrasi-detail', compact('kelas', 'registrasi'));
	}

	/**
	 * Approve/reject data registrasi handler..
	 */
	public function approveMember(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$btnApprove = $request->post('btnApprove');
			$btnReject = $request->post('btnReject');
			$kelasId = $request->post('kelasId');
			// $index = (int) $request->post('index');
			$memberId = $request->post('memberId')[0];
			$isApprove = '';

			if ($btnApprove != null) {
				$isApprove = '1';
			} else if ($btnReject != null) {
				$isApprove = '0';
			} else {
				return redirect()->back()->with('error', 'Unknown perintah approval. Pilih "Approve" atau "Reject".');
			}

			RegistrasiKelasModel::where([
				'kelasId' => $kelasId,
				'memberId' => $memberId,
			])->update([
				'isApprove' => $isApprove,
				'date_approval' => now()->format('Y-m-d'),
			]);

			return redirect()->back()->with('success', 'Success approve/reject peserta pendaftar kelas');
		} catch (QueryException $e) {
			// Database error
			return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other error
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Start the class handler..
	 */
	public function start(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$btnMulaiKelas = $request->post('btnMulaiKelas');
			$kelasId = $request->post('kelasId');
			$namaKelas = $request->post('namaKelas');

			if ($btnMulaiKelas != '1') {
				return redirect()->back()->with('error', 'Perintah tidak dikenal. Tekan ulang tombol "Mulai Kelas".');
			}

			// Baca semua data pendaftar kelas dengan approved..
			$registrasi = RegistrasiKelasModel::where([
				'kelasId' => $kelasId,
				'isApprove' => '1',
			])->get();

			$rows = array();
			foreach ($registrasi as $member) {
				array_push($rows, array(
					'kelasId' => $kelasId,
					'memberId' => $member->memberId,
					'isPass' => null,
					'date_pass' => null,
				));
			}

			// Insert all data pendaftar to enrollment_kelas..
			EnrollmentKelasModel::insert($rows);

			// Delete all data pendaftar kelas tersebut..
			RegistrasiKelasModel::where('kelasId', $kelasId)->delete();

			// Update the status of Kelas
			$kelas = KelasModel::where('kelasId', $kelasId)->get()[0];
			$kelas->isMulaiBelajar = '1';
			$kelas->save();

			return redirect()->route('kelas')->with('success', 'Success mulai kelas "' . $namaKelas . '"');
		} catch (QueryException $e) {
			// Database error
			return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other error
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}
}
