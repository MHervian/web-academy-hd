<?php

namespace Database\Seeders;

use App\Models\PrivateUserModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class PengajarSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create('id_ID');

		// insert 2 rows each for private_user and pengajar
		for ($i = 0; $i < 2; $i++) {
			// Insert row into private_user
			$user = PrivateUserModel::create([
				'username' => $faker->userName,
				'password' => Hash::make('Dcba1133!'),
				'lvl' 		 => '2', // level pengajar
			]);
			$userId = $user->userId;

			// Another insert into pengajar
			DB::table('pengajar')->insert([
				'userId' => $userId,
				'nama_pengajar' => $faker->userName,
				'date_registration' => now()->toDateString(),
				'date_approval' => now()->toDateString(),
				'isApprove' => '1',
				'isActive' => '1',
			]);
		}
	}
}
