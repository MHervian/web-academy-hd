<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class ProgramSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		// Ambil semua kurikulum yang sudah approve (isApprove = '3')
		$kurikulums = DB::table('kurikulum')
			->where('isApprove', '3')
			->pluck('kurikulumId');

		if ($kurikulums->isEmpty()) {
			throw new \Exception("Tidak ada kurikulum yang berstatus Approved (isApprove = '3').");
		}

		// fake row program
		for ($i = 0; $i < 4; $i++) {
			DB::table('program')->insert([
				'nama'        => Str::title($faker->words(3, true)),
				'deskripsi'   => $faker->paragraph(3),
				'kurikulumId' => $kurikulums->random(),
				'file_jadwal' => 'file_jadwal.pdf',
			]);
		}
	}
}
