<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PesertaRegistrasiSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		// Ambil daftar kelas dan member dari tabel terkait
		$kelasId = config('seeder.kelasId');
		$kapasitas = (int) config('seeder.kapasitas');
		$dateOpen = config('seeder.dateOpen');
		$dateClose = config('seeder.dateClose');

		$memberList = DB::table('member')->pluck('memberId')->toArray();

		if (empty($memberList)) {
			throw new \Exception("Tidak ada data member ditemukan. Pastikan tabel member berisi data.");
		}

		// Pilih acak kelas dan member
		$selectedMember = collect($memberList)->shuffle()->take($kapasitas);

		foreach ($selectedMember as $memberId) {
			// Tanggal & waktu registrasi
			$dateRegistration = $faker->dateTimeBetween($dateOpen, $dateClose);
			$timeRegistration = $faker->randomElement(['00:00:01', '23:59:59']);

			// Masukkan ke tabel registrasi_kelas
			DB::table('registrasi_kelas')->insert([
				'kelasId'           => $kelasId,
				'memberId'          => $memberId,
				'date_registration' => $dateRegistration->format('Y-m-d'),
				'time_registration' => $timeRegistration,
				'isApprove'         => null,
				'date_approval'     => null,
			]);
		}
	}
}
