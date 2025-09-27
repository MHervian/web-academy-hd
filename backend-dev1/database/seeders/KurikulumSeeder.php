<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class KurikulumSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Ambil semua userId dari tabel private_user
		$users = DB::table('private_user')->pluck('userId');

		if ($users->isEmpty()) {
			throw new \Exception("Data user kosong. Isi dahulu.");
		}

		$faker = Faker::create();

		for ($i = 0; $i < 10; $i++) {
			// tentukan status approval (0 atau 1 atau 2 atau 3)
			$isApprove = $faker->randomElement(['0', '1', '2', '3']);

			// jika approve, maka ada tanggal approve, kalau tidak NULL
			// $dateApprove = $isApprove ? $faker->date('Y-m-d', 'now') : null;
			$dateApprove = $isApprove != '0' && $isApprove != '1' ? $faker->date('Y-m-d', 'now') : null;

			DB::table('kurikulum')->insert([
				'nama'        => $faker->sentence(3), // contoh nama acak
				'deskripsi'   => $faker->boolean(70) ? $faker->paragraph() : null, // 70% isi, 30% kosong
				// 'programId'   => $faker->randomElement([1, 2]),
				'date_input'  => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
				'isApprove'   => $isApprove,
				'date_approve' => $dateApprove,
				'pic' => $users->random(),
			]);

			// Insert file kurikulum
		}
	}
}
