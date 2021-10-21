<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['id_pesanan'=>1, 'nama_pelanggan'=>'Akbar Ginanjar', 'nama_barang'=>'Laptop', 'qty'=>'2', 'tgl_pesan'=>'2021-10-19'],
            ['id_pesanan'=>2, 'nama_pelanggan'=>'Kidam Kusnandi', 'nama_barang'=>'Komputer', 'qty'=>'1', 'tgl_pesan'=>'2021-10-19'],
            ['id_pesanan'=>3, 'nama_pelanggan'=>'Rio Fadli', 'nama_barang'=>'Keyboard', 'qty'=>'4', 'tgl_pesan'=>'2021-10-19'],
            ['id_pesanan'=>4, 'nama_pelanggan'=>'Priyadi Sentosa', 'nama_barang'=>'Mouse', 'qty'=>'5', 'tgl_pesan'=>'2021-10-19'],
            ['id_pesanan'=>5, 'nama_pelanggan'=>'Wildan Diar', 'nama_barang'=>'Speaker', 'qty'=>'3', 'tgl_pesan'=>'2021-10-19'],
            ];
            // masukkan data ke database
            DB::table('pesanan')->insert($pesanan);
    }
}
