<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;
use DateTimeZone;

class BacklogKurikulumSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Ambil kurikulumId dari parameter Artisan
		// $kurikulumId = $this->command->option('kurikulumId');

		// Pakai cara config
		$kurikulumId = config('seeder.kurikulumId');

		if (!$kurikulumId) {
			throw new \Exception("Parameter --kurikulumId wajib diisi saat seeding backlog.");
		}

		// Cek apakah kurikulum ada
		$exists = DB::table('kurikulum')->where('kurikulumId', $kurikulumId)->exists();
		if (!$exists) {
			throw new \Exception("Kurikulum dengan ID $kurikulumId tidak ditemukan.");
		}

		// Hitung jumlah backlog yang sudah ada untuk kurikulum ini
		$count = DB::table('backlog_kurikulum')
			->where('kurikulumId', $kurikulumId)
			->count();

		// Tambah backlog baru
		$dt = new DateTime('now', new DateTimeZone('Asia/Jakarta')); // generate current date
		$date = $dt->format('Y-m-d');
		DB::table('backlog_kurikulum')->insert([
			'kurikulumId' => $kurikulumId,
			'seqno'       => $count + 1,
			'deskripsi'   => Str::random(50),
			// 'date_backlog' => now()->format('Y-m-d'),
			'date_backlog' => $date,
		]);
	}
}
