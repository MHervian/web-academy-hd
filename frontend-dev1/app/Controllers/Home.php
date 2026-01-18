<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Home extends BaseController
{
	public function index(): string
	{
		return view('landing-page/index');
	}
	public function course(): string
	{
		$program = new ProgramModel();
		$list = $program->findAll();
		$data = [
			'data' => $list
		];
		return view('landing-page/course', $data);
	}
	public function coursedetail(): string
	{
		return view('landing-page/course-detail');
	}
	public function community(): string
	{
		return view('landing-page/community');
	}
	public function aboutus(): string
	{
		return view('landing-page/tentang-akademi');
	}

	public function registrasi(): string
	{
		return view('registrasi');
	}

	public function login(): string
	{
		return view('login');
	}

	public function memberBeranda(): string
	{
		return view('member-page/member-home');
	}

	public function lcomingSoon(): string
	{
		return view('landing-page/coming-soon');
	}

	public function dcomingSoon(): string
	{
		return view('member-page/coming-soon');
	}

	public function courseTopik(): string
	{
		return view('course1');
	}

	public function courseGuruBahasa(): string
	{
		return view('course2');
	}

	public function notifikasi(): string
	{
		return view('member-page/notifikasi');
	}

	public function sertifikat(): string
	{
		return view('member-page/sertifikat');
	}

	public function kelas()
	{
		return view('member-page/kelas');
	}

	public function daftarKelas()
	{
		return view('member-page/daftar-kelas');
	}
}
