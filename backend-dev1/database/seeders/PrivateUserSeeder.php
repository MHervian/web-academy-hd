<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Carbon;

class PrivateUserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('private_user')->insert(
			[
				'username'     => 'cnadmin', // ganti sesuai kebutuhan
				'password'     => Hash::make('Dcba1133!'), // password raw dikonversi ke hash
				// 'date_created' => Carbon::now(), // sesuai kolom datetime
			]
		);
	}
}
