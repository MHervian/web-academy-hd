<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(): string
	{
		return view('landing-page/index');
	}
	public function course(): string
	{
		return view('landing-page/course');
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

	public function comingSoon(): string
	{
		return view('coming-soon');
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
}
