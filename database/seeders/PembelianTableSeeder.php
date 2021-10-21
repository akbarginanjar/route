<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['id_pembelian'=>1, 'nama_barang'=>'Laptop', 'nama_suplier'=>'Aldi Awaludin', 'qty'=>'2', 'tgl'=>'2021-10-19'],
            ['id_pembelian'=>2, 'nama_barang'=>'Komputer', 'nama_suplier'=>'Aceng Fikri', 'qty'=>'1', 'tgl'=>'2021-10-19'],
            ['id_pembelian'=>3, 'nama_barang'=>'Keyboard', 'nama_suplier'=>'Firman', 'qty'=>'4', 'tgl'=>'2021-10-19'],
            ['id_pembelian'=>4, 'nama_barang'=>'Mouse', 'nama_suplier'=>'Ikhsan', 'qty'=>'5', 'tgl'=>'2021-10-19'],
            ['id_pembelian'=>5, 'nama_barang'=>'Speaker', 'nama_suplier'=>'Hasan', 'qty'=>'3', 'tgl'=>'2021-10-19'],
            ];
            // masukkan data ke database
            DB::table('pembelian')->insert($pembelian);
    }
}
