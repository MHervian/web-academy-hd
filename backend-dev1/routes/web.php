<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login routes
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login-post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

// Create user routes
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'store'])->name('store-user');

// Member routes
Route::get('/member', [MemberController::class, 'index'])->name('member');
Route::get('/member-detail', [MemberController::class, 'detail'])->name('member-detail');

// Kelas routes
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/create-kelas', [KelasController::class, 'create'])->name('kelas-create');
Route::post('/create-kelas', [KelasController::class, 'store'])->name('store-kelas');
Route::get('/kelas-detail', function () {
	return view('kelas-detail');
})->name('kelas-detail');

// Kelas registration routes
Route::get('/kelas-registrasi', function () {
	return view('kelas-registrasi');
})->name('kelas-registrasi');
Route::get('/kelas-registrasi-detail', function () {
	return view('kelas-registrasi-detail');
})->name('kelas-registrasi-detail');

// Kurikulum routes..
Route::get('/kurikulum', function () {
	return view('kurikulum');
})->name('kurikulum');
Route::get('/kurikulum-detail', function () {
	return view('kurikulum-detail');
})->name('kurikulum-detail');

// Upload kurikulum routes..
Route::get('/upload-kurikulum', function () {
	return view('upload-kurikulum');
})->name('upload-kurikulum');

// Uplaod sertifikat routes..
Route::get('/upload-sertifikat', function () {
	return view('upload-sertifikat');
})->name('upload-sertifikat');

// Coming soon routes..
Route::get('/login-coming-soon', function () {
	return view('coming-soon-login');
})->name('login-coming-soon');
Route::get('/coming-soon', function () {
	return view('coming-soon');
})->name('coming-soon');
