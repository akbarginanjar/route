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
    return view('welcome');
});

Route::get('/tentang', function() {
    return '<h1>Hallo</h1>'.
    'Selamat datang di webapp saya<br>'.
    'Laravel, emang keren.';
});

Route::get('/perkenalan', function () {
    return view('akbar/perkenalan');
});

Route::get('/sekolah', function () {
    return view('akbar/sekolah');
});

Route::get('/hobi', function () {
    return view('akbar/hobi');
});

Route::get('/cita', function () {
    return view('akbar/cita');
});

Route::get('/about', function () {
    return view('akbar/about');
});
