<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SertifikatSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Ambil semua memberId dari tabel member
		$members = DB::table('member')->pluck('memberId');

		// If zero member found
		if ($members->isEmpty()) {
			throw new \Exception("Data member kosong. Isi dahulu.");
		}

		foreach ($members as $memberId) {
			DB::table('sertifikat')->insert([
				'memberId'     => $memberId,
				'noSertifikat' => strtoupper(Str::random(10)), // campuran alphanumeric
				'date_issued'  => Carbon::now(),               // pakai datetime sekarang
				'filename'     => 'course_certificate.pdf',
			]);
		}
	}
}
