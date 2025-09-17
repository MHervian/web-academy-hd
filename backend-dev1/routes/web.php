<?php

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

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/dashboard', function () {
    return view('admin-dashboard');
})->name('admin-dashboard');
Route::get('/member', function () {
    return view('member');
})->name('member');
Route::get('/member-detail', function () {
    return view('member-detail');
})->name('member-detail');
Route::get('/kelas', function () {
    return view('kelas');
})->name('kelas');
Route::get('/kelas-detail', function () {
    return view('kelas-detail');
})->name('kelas-detail');
Route::get('/kelas-registrasi', function () {
    return view('kelas-registrasi');
})->name('kelas-registrasi');
Route::get('/kelas-registrasi-detail', function () {
    return view('kelas-registrasi-detail');
})->name('kelas-registrasi-detail');
Route::get('/kurikulum', function () {
    return view('kurikulum');
})->name('kurikulum');
Route::get('/kurikulum-detail', function () {
    return view('kurikulum-detail');
})->name('kurikulum-detail');
Route::get('/upload-kurikulum', function () {
    return view('upload-kurikulum');
})->name('upload-kurikulum');
Route::get('/upload-sertifikat', function () {
    return view('upload-sertifikat');
})->name('upload-sertifikat');
Route::get('/login-coming-soon', function () {
    return view('coming-soon-login');
})->name('login-coming-soon');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
