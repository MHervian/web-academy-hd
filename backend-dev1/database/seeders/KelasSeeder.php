<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KelasSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		// Ambil semua nama program dari tabel program
		$programs = DB::table('program')->pluck('nama');

		if ($programs->isEmpty()) {
			throw new \Exception("Tidak ada program ditemukan. Seeder Program harus dijalankan lebih dulu.");
		}

		// Tentukan date_open
		$dateOpen = $faker->dateTimeBetween('-1 month', '+1 month'); // acak sekitar 1 bulan mundur/maju
		$dateClose = (clone $dateOpen)->modify('+2 weeks'); // 2 minggu setelah date_open

		// Pilih jam penutupan (12:00:00 atau 16:00:00)
		$timeOptions = ['12:00:00', '16:00:00'];
		$timeClose = $faker->randomElement($timeOptions);

		DB::table('kelas')->insert([
			'nama_kelas'   => 'Kelas ' . strtoupper($faker->bothify('??##')), // contoh: Kelas AB12
			'nama_program' => $programs->random(), // pilih acak nama program
			'deskripsi'    => $faker->paragraph(2),
			'kapasitas'    => $faker->numberBetween(10, 25),
			'date_open'    => $dateOpen->format('Y-m-d'),
			'date_close'   => $dateClose->format('Y-m-d'),
			'time_close'   => $timeClose,
		]);
	}
}
