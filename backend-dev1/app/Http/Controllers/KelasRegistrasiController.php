<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\RegistrasiKelasModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

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
		$registrasi = RegistrasiKelasModel::join('member', 'member.memberId', '=', 'registrasi_kelas.memberId')
			->select(
				'member.memberId',
				'member.username',
				'member.email',
				'registrasi_kelas.date_registration',
				'registrasi_kelas.time_registration',
				'registrasi_kelas.isApprove',
				'registrasi_kelas.date_approval',
			)
			->get();

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
		foreach ($registrasi as $member) {
			echo "<pre>";
			var_dump($member->memberId);
			echo "</pre>";
		}
		try {
			// if (isEmpty($registrasi)) {
			// 	return redirect()->back()->with('error', 'Pendaftar kelas ini masih kosong');
			// }

			// Pindah semua data pendaftar ke enrollment_kelas..

			// Hapus semua data pendaftar kelas tersebut..

			// return redirect()->route('kelas')->with('success', 'Success mulai kelas "' . $namaKelas . '"');
		} catch (QueryException $e) {
			// Database error
			return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Other error
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}
}
