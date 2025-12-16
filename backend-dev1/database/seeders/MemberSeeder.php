<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class MemberSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create('id_ID'); // bisa pakai locale lain sesuai kebutuhan

		// Generate 10 fake rows of member
		for ($i = 0; $i < 5; $i++) {
			// generate tanggal untuk memberId
			$datePart = now()->format('Ymd');
			$sequence = str_pad((string) rand(0, 9999), 4, '0', STR_PAD_LEFT);
			$memberId = $datePart . $sequence;

			DB::table('member')->insert([
				'memberId'          => $memberId,
				'username'          => $faker->userName,
				'email'             => $faker->unique()->safeEmail,
				'password'          => Hash::make('password123'), // dummy password
				'date_registration' => now()->toDateString(),
			]);
		}
	}
}
