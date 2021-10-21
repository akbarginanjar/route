<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['id_barang'=>1, 'nama'=>'Laptop', 'varian'=>'unit', 'harga_beli'=>4000000, 'harga_jual'=>4500000],
            ['id_barang'=>2, 'nama'=>'Komputer', 'varian'=>'unit', 'harga_beli'=>2000000, 'harga_jual'=>3000000],
            ['id_barang'=>3, 'nama'=>'Keyboard', 'varian'=>'unit', 'harga_beli'=>300000, 'harga_jual'=>330000],
            ['id_barang'=>4, 'nama'=>'Mouse', 'varian'=>'unit', 'harga_beli'=>70000, 'harga_jual'=>75000],
            ['id_barang'=>5, 'nama'=>'Speaker', 'varian'=>'unit', 'harga_beli'=>500000, 'harga_jual'=>580000],
            ];
            // masukkan data ke database
            DB::table('barang')->insert($barang);
    }
}
