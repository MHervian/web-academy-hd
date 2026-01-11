<?php

use App\Http\Controllers\SeederController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All defined admin routes listed here
|
*/

// Login routes..
Route::controller('LoginController')->group(function () {
  Route::get('/', 'index')->name('login');
  Route::post('/login', 'login')->name('login-post');
  Route::get('/logout', 'logout')->name('logout');
});

// Dashboard routes..
Route::controller('DashboardController')->group(function () {
  Route::get('/dashboard', 'index')->name('admin-dashboard');
});

// Member routes..
Route::controller('MemberController')->group(function () {
  Route::get('/member', 'index')->name('member');
  Route::post('/member', 'delete')->name('delete-member');
  Route::get('/member-detail/{id}', 'detail')->name('member-detail');
});

// Sertifikat routes..
Route::controller('SertifikatController')->group(function () {
  Route::get('/sertifikat', 'index')->name('sertifikat');
  Route::get('/sertifikat/upload', 'create')->name('upload-sertifikat');
  Route::post('/sertifikat/upload', 'store')->name('store-sertifikat');
  Route::get('/sertifikat/{noSertifikat}', 'detail')->name('sertifikat-detail');
  Route::get('/sertifikat/view/{filename}', 'viewFile')->name('view-sertifikat');
});

// Kurikulum routes..
Route::controller('KurikulumController')->group(function () {
  Route::get('/kurikulum', 'index')->name('kurikulum');
  Route::post('/kurikulum/feedback', 'storeFeedback')->name('store-feedback-kurikulum');
  Route::get('/kurikulum-detail/{idKurikulum}', 'detail')->name('kurikulum-detail');
  Route::get('/kurikulum/edit/{kurikulumId}', 'edit')->name('edit-kurikulum');
  Route::post('/kurikulum/edit', 'update')->name('update-kurikulum');
  Route::get('/kurikulum/file/upload/{kurikulumId}', 'uploadFile')->name('upload-file-kurikulum');
  Route::post('/kurikulum/file/upload', 'storeFile')->name('store-file-kurikulum');
  Route::get('/kurikulum/edit/{kurikulumId}', 'edit')->name('edit-kurikulum');
  Route::post('/kurikulum/edit', 'update')->name('update-kurikulum');
  Route::post('/kurikulum-detail/approve', 'approve')->name('approve-kurikulum');
  Route::delete('/kurikulum/delete', 'delete')->name('delete-kurikulum');
  Route::get('/upload-kurikulum', 'create')->name('upload-kurikulum');
  Route::post('/upload-kurikulum', 'store')->name('store-kurikulum');
  Route::get('/kurikulum/view/{filename}', 'viewFile')->name('view-kurikulum');
  Route::get('/kurikulum/feedback/{idKurikulum}', 'inputFeedback')->name('input-feedback-kurikulum');
});

// Program routes..
Route::controller('ProgramController')->group(function () {
  Route::get('/program', 'index')->name('program');
  Route::post('/program', 'delete')->name('delete-program');
  Route::get('/program/create', 'create')->name('create-program');
  Route::get('/program/edit/{programId}', 'edit')->name('edit-program');
  Route::post('/program/create', 'store')->name('store-program');
  Route::post('/program/update', 'update')->name('update-program');
  Route::get('/program/view/{filename}', 'viewFile')->name('view-program');
  Route::get('/program/{programId}', 'detail')->name('program-detail');
});

// Kelas routes..
Route::controller('KelasController')->group(function () {
  Route::get('/kelas', 'index')->name('kelas');
  Route::post('/kelas', 'delete')->name('delete-kelas');
  Route::get('/create-kelas', 'create')->name('create-kelas');
  Route::get('/kelas/edit/{kelasId}', 'edit')->name('edit-kelas');
  Route::post('/kelas/update', 'update')->name('update-kelas');
  Route::post('/create-kelas', 'store')->name('store-kelas');
  Route::get('/kelas-detail/{kelasId}', 'detail')->name('kelas-detail');
});

// Kelas registration routes..
Route::controller('KelasRegistrasiController')->group(function () {
  Route::get('/kelas-registrasi', 'index')->name('kelas-registrasi');
  Route::get('/kelas-registrasi/{kelasId}', 'detail')->name('kelas-registrasi-detail');
  Route::post('/kelas-registrasi/approve', 'approveMember')->name('approve-pendaftar-kelas');
  Route::post('/kelas-registrasi/start', 'start')->name('start-kelas');
});

// Pengajar routes..
Route::controller('PengajarController')->group(function () {
  Route::get('/pengajar', 'index')->name('pengajar');
  Route::get('/pengajar/register', 'register')->name('pengajar-registrasi');
  Route::post('/pengajar/register', 'store')->name('store-pengajar');
  Route::get('/pengajar-registrasi', 'approval')->name('approve-pengajar');
  Route::post('/pengajar-registrasi', 'approvePengajar')->name('store-approve-pengajar');
  Route::post('/pengajar-registrasi/start', 'finishApproving')->name('start-approve-pengajar');
  Route::get('/pengajar/{userId}', 'detail')->name('pengajar-detail');
  Route::delete('/pengajar/{userId}', [])->name('delete-pengajar');
});

// User routes..
Route::controller('UserPanelController')->group(function () {
  Route::get('/user', 'index')->name('user');
  Route::get('/user/create', 'create')->name('user-create');
  Route::post('/user/create', 'store')->name('store-user');
  Route::get('/user/update', [])->name('user-edit');
  Route::post('/user/update', [])->name('update-user');
  Route::delete('/user/delete', [])->name('delete-user');
});

// Notification routes..
Route::controller('NotificationController')->group(function () {
  Route::get('/notification', 'index')->name('notification');
  Route::get('/create-notification', 'create')->name('create-notification');
  Route::post('/create-notification', 'store')->name('store-notification');
  Route::get('/detail-notification/{id}', 'detail')->name('detail-notification');
});

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
Route::get('/seed-peserta-registrasi/{kelasId}/{kapasitas}/{open}/{close}', [SeederController::class, 'seederPesertaRegistrasi'])
  ->name('seed-peserta-registrasi');
// Pengajar 
Route::get('/seed-pengajar', [SeederController::class, 'seederPengajar'])
  ->name('seed-pengajar');
// Registrasi pengajar
Route::get('/seed-pengajar-registrasi', [SeederController::class, 'seederRegistrasiPengajar'])
  ->name('seed-pengajar-registrasi');
// Private user
Route::get('/seed-private-user', [SeederController::class, 'seederPrivateUser'])
  ->name('seed-private-user');
