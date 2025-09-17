<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(): string
	{
		return view('home');
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
		return view('member-home');
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
		return view('notifikasi');
	}

	public function sertifikat(): string
	{
		return view('sertifikat');
	}
}
