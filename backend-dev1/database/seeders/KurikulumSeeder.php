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
			// tentukan status approval (1 atau 2 atau NULL)
			$isApprove = $faker->randomElement([null, '1', '2']);

			// jika approve, maka ada tanggal approve, kalau tidak NULL
			// $dateApprove = $isApprove ? $faker->date('Y-m-d', 'now') : null;
			$dateApprove = $isApprove ? $faker->date('Y-m-d', 'now') : '0';

			DB::table('kurikulum')->insert([
				'nama'        => $faker->sentence(3), // contoh nama acak
				'deskripsi'   => $faker->boolean(70) ? $faker->paragraph() : null, // 70% isi, 30% kosong
				// 'programId'   => $faker->randomElement([1, 2]),
				'date_input'  => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
				'isApprove'   => $isApprove,
				'date_approve' => $dateApprove,
				// 'pic' => 
			]);
		}
	}
}
