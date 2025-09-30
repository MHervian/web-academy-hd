<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasRegistrasiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SeederController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;

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

// Login routes..
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login-post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard routes..
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

// Member routes..
Route::get('/member', [MemberController::class, 'index'])->name('member');
Route::post('/member', [MemberController::class, 'delete'])->name('delete-member');
Route::get('/member-detail/{id}', [MemberController::class, 'detail'])->name('member-detail');

// Sertifikat routes..
Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat');
Route::get('/sertifikat/upload', [SertifikatController::class, 'create'])->name('upload-sertifikat');
Route::post('/sertifikat/upload', [SertifikatController::class, 'store'])->name('store-sertifikat');
Route::get('/sertifikat/{noSertifikat}', [SertifikatController::class, 'detail'])->name('sertifikat-detail');
Route::get('/sertifikat/view/{filename}', [SertifikatController::class, 'viewFile'])->name('view-sertifikat');

// Kurikulum routes..
Route::get('/kurikulum', [KurikulumController::class, 'index'])->name('kurikulum');
Route::get('/kurikulum-detail/{idKurikulum}', [KurikulumController::class, 'detail'])
	->name('kurikulum-detail');
Route::get('/upload-kurikulum', [KurikulumController::class, 'create'])->name('upload-kurikulum');
Route::post('/upload-kurikulum', [KurikulumController::class, 'store'])->name('store-kurikulum');
Route::get('/kurikulum/view/{filename}', [KurikulumController::class, 'viewFile'])->name('view-kurikulum');

// Program routes..
Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::post('/program', [ProgramController::class, 'delete'])->name('delete-program');
Route::get('/program/create', [ProgramController::class, 'create'])->name('create-program');
Route::post('/program/create', [ProgramController::class, 'store'])->name('store-program');
Route::get('/program/view/{filename}', [ProgramController::class, 'viewFile'])->name('view-program');
Route::get('/program/{programId}', [ProgramController::class, 'detail'])->name('program-detail');

// Kelas routes
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/create-kelas', [KelasController::class, 'create'])->name('create-kelas');
Route::post('/create-kelas', [KelasController::class, 'store'])->name('store-kelas');
Route::get('/kelas-detail/{kelasId}', [KelasController::class, 'detail'])->name('kelas-detail');

// Kelas registration routes
Route::get('/kelas-registrasi', [
	KelasRegistrasiController::class,
	'index'
])->name('kelas-registrasi');
Route::get('/kelas-registrasi-detail', function () {
	return view('kelas-registrasi-detail');
})->name('kelas-registrasi-detail');

// Create user routes
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'store'])->name('store-user');

//notification
Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
Route::get('/create-notification', [NotificationController::class, 'create'])->name('create-notification');
Route::post('/create-notification', [NotificationController::class, 'store'])->name('store-notification');
Route::get('/detail-notification/{id}', [NotificationController::class, 'detail'])->name('detail-notification');

// Coming soon routes..
Route::get('/login-coming-soon', function () {
	return view('coming-soon-login');
})->name('login-coming-soon');
Route::get('/coming-soon', function () {
	return view('coming-soon');
})->name('coming-soon');

// Seeder route..
// Member
Route::get('/seed-member', [SeederController::class, 'seederMember'])
	->name('seed-member');
// Sertifikat
Route::get('/seed-sertifikat', [SeederController::class, 'seederSertifikat'])
	->name('seed-sertifikat');
// Kurikulum
Route::get('/seed-kurikulum', [SeederController::class, 'seederKurikulum'])
	->name('seed-kurikulum');
Route::get('/seed-backlog-kurikulum/{kurikulumId}/{status}', [SeederController::class, 'seederBacklogKurikulum'])
	->name('seed-backlog-kurikulum');
// Program
Route::get('/seed-program', [SeederController::class, 'seederProgram'])
	->name('seed-program');
// Kelas
Route::get('/seed-kelas', [SeederController::class, 'seederKelas'])
	->name('seed-kelas');
// Peserta Registrasi Kelas
Route::get('/seed-peserta-registrasi', [SeederController::class, 'seederPesertaRegistrasi'])
	->name('seed-peserta-registrasi');
// Private user
Route::get('/seed-private-user', [SeederController::class, 'seederPrivateUser'])
	->name('seed-private-user');
