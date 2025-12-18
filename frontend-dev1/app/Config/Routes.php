<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'beranda']);
$routes->get('/registrasi', 'Home::registrasi', ['as' => 'registrasi']);
$routes->get('/login', 'Home::login', ['as' => 'login']);
$routes->get('/beranda-member', 'Home::memberBeranda', ['as' => 'beranda-member']);
$routes->get('/coming-soon', 'Home::comingSoon', ['as' => 'coming-soon']);
$routes->get('/course-topik', 'Home::courseTopik', ['as' => 'course-topik']);
$routes->get('/course-pelatihan-guru-bahasa-korea', 'Home::courseGuruBahasa', ['as' => 'course-guru-bahasa']);
$routes->get('/notifikasi', 'Home::notifikasi', ['as' => 'notifikasi']);
$routes->get('/sertifikat', 'Home::sertifikat', ['as' => 'sertifikat']);
$routes->get('/kelas', 'Home::kelas', ['as' => 'kelas']);
