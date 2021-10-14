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

Route::get('/index', function () {
    return view('akbar/index');
});

Route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function ($nama = "Hello World") {
    return "<b>$nama</b>";
});

// Route::get('pesan/{pesan?}', function ($makanan = "roti", $minuman = "susu") {
//     if ($makanan == "") {
//         echo "anda tidak memesan makanan silahkan pulang";
//     } else if ($makanan == $makanan) {
//         echo "Anda pesan makanan : " . $makanan;
//     }
// });

Route::get('lapar/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = "",$minuman = "",$cemilan = "") {
    if ($makanan == "" && $minuman == "" && $cemilan == "") {
        $sa = "Anda Tidak Pesan, Silahkan Pulang";
    }
            if ($makanan != "" ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>";            
        }
        if ($makanan != "" && $minuman != "" ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"            
            . "Minuman : $minuman <br>";
        }   
        
        if ($makanan != "" && $minuman != "" && $cemilan != "") {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"            
            . "Minuman : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$sa";
});
