<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnrollmentKelasModel;
use App\Models\KelasModel;
use App\Models\ProgramModel;
use Illuminate\Database\QueryException;

class KelasController extends Controller
{
	/**
	 * Display all kelas page..
	 */
	public function index(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get all members
		// $kelas = KelasModel::all();
		$kelas = KelasModel::orderBy('date_created', 'desc')
			->paginate(10);

		// return view('kelas', compact('kelas'));
		return view('kelas/index', compact('kelas'));
	}

	/**
	 * Display filtered kelas search page..
	 */
	public function search(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$query = KelasModel::query();

		// 🔍 Search nama kelas / nama program
		if ($request->filled('keyword')) {
			$query->where(function ($q) use ($request) {
				$q->where('nama_kelas', 'LIKE', '%' . $request->keyword . '%')
					->orWhere('nama_program', 'LIKE', '%' . $request->keyword . '%');
			});
		}

		// 🔓 Filter status kelas
		if ($request->filled('status')) {
			$query->where('isKelasStart', $request->status);
		}

		$kelas = $query->orderBy('date_created', 'desc')
			->paginate(10)
			->withQueryString();

		return view('kelas/index', compact('kelas'));
	}

	/**
	 * Display detail kelas page..
	 */
	public function detail(Request $request, $kelasId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get kelas detail
		$kelas = KelasModel::find($kelasId);
		// Get all peserta of this kelas..
		// $peserta = EnrollmentKelasModel::join('member', 'member.memberId', '=', 'enrollment_kelas.memberId')
		// 	->select(
		// 		'member.memberId',
		// 		'member.username',
		// 		'member.email',
		// 		'enrollment_kelas.isPass',
		// 		'enrollment_kelas.date_pass',
		// 	)
		// 	->where('enrollment_kelas.kelasId', $kelasId)
		// 	->get();
		$peserta = [];

		// return view('kelas-detail', compact('kelas', 'peserta'));
		return view('kelas/detail', compact('kelas', 'peserta'));
	}

	/**
	 * Display form create kelas page..
	 */
	public function create(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		$programs = ProgramModel::all();

		// return view('create-kelas', compact('programs'));
		return view('kelas/create', compact('programs'));
	}

	/**
	 * Store new kelas handler..
	 */
	public function store(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'nama_kelas' => 'required|string|max:50',
				'nama_program' => 'required',
				'deskripsi' => 'required',
				'kapasitas' => 'required',
				'date_open' => 'required',
				'date_close' => 'required',
				'time_close' => 'required',
				'pengajar' => 'required|string|max:255',
			]);

			if (trim($data['deskripsi']) != '') {
				$data['deskripsi'] = trim($data['deskripsi']);
			}

			KelasModel::create($data);

			return redirect()->route('kelas')->with('success', 'success: Simpan kelas baru berhasil.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('kelas')->with('error', 'Gagal membuat kelas. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('kelas')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}

	/**
	 * Display edit form kelas page
	 */
	public function edit(Request $request, $kelasId)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		// Get kelas data
		$kelas = KelasModel::find($kelasId);

		// Get program data
		$programs = ProgramModel::all();

		// return view('program-detail', compact('program', 'kurikulum'));
		return view('edit-kelas', compact('programs', 'kelas'));
	}

	/**
	 * Update kelas handler..
	 */
	public function update(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate([
				'kelasId' => 'required',
				'nama_kelas' => 'required|string|max:50',
				'nama_program' => 'required',
				'deskripsi' => 'required',
				'kapasitas' => 'required',
				'date_open' => 'required',
				'date_close' => 'required',
				'time_close' => 'required',
				'pengajar' => 'required|string|max:255',
			]);

			if (trim($data['deskripsi']) != '') {
				$data['deskripsi'] = trim($data['deskripsi']);
			}

			// Update kelas information
			KelasModel::where('kelasId', $data['kelasId'])->update($data);

			return redirect()->route('kelas')->with('success', 'success: Kelas berhasil ubah.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('kelas')->with('error', 'Gagal ubah kelas. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('kelas')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}

	/**
	 * Delete kelas handler..
	 */
	public function delete(Request $request)
	{
		if (!$request->session()->has('login_user')) {
			return redirect()->route('login');
		}

		try {
			$data = $request->validate(['kelasId' => 'required']);

			KelasModel::destroy($data['kelasId']);

			return redirect()->route('kelas')->with('success', 'success: Hapus kelas.');
		} catch (QueryException $e) {
			// Error database 
			return redirect()->route('kelas')->with('error', 'Gagal hapus kelas. Error DB: ' . $e->getMessage());
		} catch (\Exception $e) {
			// Error umum
			return redirect()->route('kelas')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
		}
	}
}
