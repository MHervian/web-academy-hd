<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', function () {
    $request = service('request');
    $locale  = $request->getLocale() ?? 'id';
    return redirect()->to('/' . $locale);
});

$routes->group('{locale}', function ($routes) {
    // $routes->group('(:locale)', function ($routes) {
    //landing-page
    $routes->get('/', 'Home::index', ['as' => 'beranda']);
    $routes->get('course', 'Home::course', ['as' => 'course']);
    $routes->get('course-detail', 'Home::coursedetail', ['as' => 'course-detail']);
    $routes->get('community', 'Home::community', ['as' => 'community']);
    $routes->get('about-us', 'Home::aboutus', ['as' => 'about-us']);
    $routes->get('registrasi', 'Home::registrasi', ['as' => 'registrasi']);
    // $routes->get('login', 'Home::login', ['as' => 'login']);
    $routes->get('beranda-member', 'Home::memberBeranda', ['as' => 'beranda-member']);
    $routes->get('coming-soon-landing-page', 'Home::lcomingSoon', ['as' => 'coming-soon-landing-page']);
    $routes->get('coming-soon-dashboard', 'Home::dcomingSoon', ['as' => 'coming-soon-dashboard']);
    $routes->get('course-topik', 'Home::courseTopik', ['as' => 'course-topik']);
    $routes->get('course-pelatihan-guru-bahasa-korea', 'Home::courseGuruBahasa', ['as' => 'course-guru-bahasa']);
    // $routes->get('/notifikasi', 'Home::notifikasi', ['as' => 'notifikasi']);
    $routes->get('sertifikat', 'Sertifikat::index', ['as' => 'sertifikat']);
    $routes->get('kelas', 'Kelas::index', ['as' => 'kelas']);

    $routes->get('daftar-kelas', 'Kelas::daftarProgram', ['as' => 'daftar-kelas']);
    $routes->get('detail-kelas', 'Kelas::detailKelas');

    //
    $routes->get('auth/login', 'Auth::login', ['as' => 'auth-login']);
    $routes->get('auth/register', 'Auth::register', ['as' => 'auth-regiter']);
    $routes->get('auth/logout', 'Auth::logout');
});

$routes->get('/notifikasi', 'Notification::index', ['as' => 'notifikasi']);
$routes->get('/notifikasi-detail/(:num)', 'Notification::detail/$1', ['as' => 'notifikasi-detail']);

$routes->get('/kelas/search', 'Kelas::search');
$routes->get('/get-kelas-list', 'Kelas::daftarKelas');
$routes->post('/get-snap-token', 'Kelas::getSnapToken');
$routes->post('midtrans/callback', 'MidtransController::callback');
$routes->post('/user/store', 'User::store');
$routes->post('/auth/login-with-email', 'Auth::loginWithEmail');
$routes->get('/auth/callback', 'Auth::callback');
$routes->post('/daftar-kelas', 'Kelas::pendaftarStore');
