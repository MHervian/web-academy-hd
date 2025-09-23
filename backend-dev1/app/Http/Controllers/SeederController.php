<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SeederController extends Controller
{
	// Seeder member..
	public function seederMember()
	{
		Artisan::call('db:seed', [
			'--class' => 'MemberSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder member berhasil');
	}

	// Seeder kurikulum..
	public function seederKurikulum()
	{
		Artisan::call('db:seed', [
			'--class' => 'KurikulumSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder kurikulum berhasil');
	}

	// Seeder kelas..
	public function seederKelas()
	{
		Artisan::call('db:seed', [
			'--class' => 'KelasSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder kelas berhasil');
	}

	// Seeder program..
	public function seederProgram()
	{
		Artisan::call('db:seed', [
			'--class' => '',
		]);

		return redirect()->back()->with('success', '');
	}

	// Seeder registrasi kelas..
	public function seederRegistrasiKelas()
	{
		Artisan::call('db:seed', [
			'--class' => '',
		]);

		return redirect()->back()->with('success', '');
	}

	// Seeder private user..
	public function seederPrivateUser()
	{
		Artisan::call('db:seed', [
			'--class' => 'PrivateUserSeeder',
		]);

		return redirect()->back()->with('success', 'Seeder private user berhasil');
	}
}
