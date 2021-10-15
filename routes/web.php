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
    return view('akbar/index', [
        "title" => "Yayasan Assalaam Bandung"
    ]);
});

Route::get('profile', function() {
    $nama = "Akbar";
    return view('akbar/profile', compact('nama'));
});

Route::get('biodata', function() {
    $nama = "Akbar";
    $umur = 17;
    $alamat = "Bandung";
    $sekolah = "SMK Assalaam";
    $kelas = "XII RPL 2";
    $hobi = "Ngoding";
    return view('akbar/biodata', 
    compact('nama','umur','alamat','sekolah','kelas','hobi'));
});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    return view('akbar/blog', compact('posts')); 
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

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = "",$minuman = "",$cemilan = "") {
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

Route::get('siswa', function () {
    $siswa = [
        [
            'id' => 1, 
            'nama' => 'Akbar Ginanjar', 
            'username' => 'akbarginanjar',
            'email' => 'akbarginanjar@gmail.com',
            'alamat' => 'Margaluyu 1',
            'mapel' => [
                'mapel1' => 'Bahasa Indnesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indnesia',
            ],
        ],
        [
            'id' => 2, 
            'nama' => 'Kidam Kusnandi', 
            'username' => 'kidamkusnnd',
            'email' => 'kidamkus@gmail.com',
            'alamat' => 'Sayuran',
            'mapel' => [
                'mapel1' => 'Bahasa Indnesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indnesia',
            ],
        ],
        [
            'id' => 3, 
            'nama' => 'Rio Fadli', 
            'username' => 'riofadli',
            'email' => 'riofadli@gmail.com',
            'alamat' => 'Cibaduyut',
            'mapel' => [
                'mapel1' => 'Bahasa Indnesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indnesia',
            ],
        ],
        [
            'id' => 4, 
            'nama' => 'Priyadi Sentosa', 
            'username' => 'priyadi',
            'email' => 'sentosa@gmail.com',
            'alamat' => 'Sayuran',
            'mapel' => [
                'mapel1' => 'Bahasa Indnesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indnesia',
            ],
        ],
        [
            'id' => 5, 
            'nama' => 'Wildan Diar Nadzir', 
            'username' => 'wildandiar',
            'email' => 'wildandiar@gmail.com',
            'alamat' => 'Rancamanyar',
            'mapel' => [
                'mapel1' => 'Bahasa Indnesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indnesia',
            ],
        ],
    ];
    
    return view('akbar/siswa', compact('siswa')); 
});