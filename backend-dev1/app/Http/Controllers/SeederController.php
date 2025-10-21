<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SeederController extends Controller
{
	// Seeder member..
	public function seederMember()
	{
		Artisan::call('db:seed', [
			'--class' => 'MemberSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder member berhasil');
	}

	// Seeder sertifikat..
	public function seederSertifikat()
	{
		try {
			Artisan::call('db:seed', [
				'--class' => 'SertifikatSeeder',
			]);
			return redirect()->back()->with('success', 'Seeder sertifikat berhasil');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Exception::' . $e->getMessage());
		}
	}

	// Seeder kurikulum..
	public function seederKurikulum()
	{
		try {
			Artisan::call('db:seed', [
				'--class' => 'KurikulumSeeder',
			]);
			return redirect()->back()->with('success', 'Seeder kurikulum berhasil');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Exception::' . $e->getMessage());
		}
	}

	// Seeder backlog kurikulum..
	public function seederBacklogKurikulum(Request $request, $kurikulumId, $status)
	{
		// $kurikulumId = $request->input('kurikulumId');
		// $status = $request->input('status');

		try {
			if ($status == '0') {
				throw new \Exception("Pilih kurikulum dengan status On Review, Rejected, atau Approved.");
			}

			// Inject parameter ke config agar bisa diambil Seeder
			config(['seeder.kurikulumId' => $kurikulumId]);

			Artisan::call('db:seed', [
				'--class' => 'BacklogKurikulumSeeder',
				// '--kurikulumId' => $kurikulumId,
			]);
			return redirect()->back()->with('success', 'Seeder backlog kurikulum berhasil');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Exception::' . $e->getMessage());
		}
	}

	// Seeder kelas..
	public function seederKelas()
	{
		Artisan::call('db:seed', [
			'--class' => 'KelasSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder kelas berhasil');
	}

	// Seeder kelas..
	public function seederPesertaRegistrasi(Request $request, $kelasId, $kapasitas, $dateOpen, $dateClose)
	{
		try {
			// Inject parameter ke config agar bisa diambil Seeder
			config(['seeder.kelasId' => $kelasId]);
			config(['seeder.kapasitas' => $kapasitas]);
			config(['seeder.dateOpen' => $dateOpen]);
			config(['seeder.dateClose' => $dateClose]);

			Artisan::call('db:seed', [
				'--class' => 'PesertaRegistrasiSeeder',
			]);

			return redirect()->back()->with('success', 'Seeder peserta registrasi berhasil');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	// Seeder program..
	public function seederProgram()
	{
		Artisan::call('db:seed', [
			'--class' => 'ProgramSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder program berhasil');
	}

	// Seeder pengajar..
	public function seederPengajar()
	{
		try {
			Artisan::call('db:seed', [
				'--class' => 'PengajarSeeder',
			]);
			return redirect()->back()->with('success', 'Seeder pengajar berhasil');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	// Seeder registrasi pengajar..
	public function seederRegistrasiPengajar()
	{
		try {
			Artisan::call('db:seed', [
				'--class' => 'RegistrasiPengajarSeeder',
			]);
			return redirect()->back()->with('success', 'Seeder registrasi pengajar berhasil');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	// Seeder mengajar kelas..
	public function seederMengajarKelas()
	{
		Artisan::call('db:seed', [
			'--class' => '',
		]);

		return redirect()->back()->with('success', 'Seeder mengajar kelas berhasil');
	}

	// Seeder private user..
	public function seederPrivateUser()
	{
		Artisan::call('db:seed', [
			'--class' => 'PrivateUserSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder private user berhasil');
	}
}
