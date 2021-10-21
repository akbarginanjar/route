<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['id_suplier'=>1, 'nama'=>'Aldi Awaludin', 'alamat'=>'Margaluyu', 'kode_pos'=>47581, 'kota'=>'Bandung'],
            ['id_suplier'=>2, 'nama'=>'Aceng Fikri', 'alamat'=>'Sayuran', 'kode_pos'=>23423, 'kota'=>'Bandung'],
            ['id_suplier'=>3, 'nama'=>'Firman', 'alamat'=>'Cibaduyut', 'kode_pos'=>12312, 'kota'=>'Bandung'],
            ['id_suplier'=>4, 'nama'=>'Ikhsan', 'alamat'=>'Sayuran', 'kode_pos'=>34323, 'kota'=>'Bandung'],
            ['id_suplier'=>5, 'nama'=>'Hasan', 'alamat'=>'Rancamanyar', 'kode_pos'=>86787, 'kota'=>'Bandung'],
            ];
            // masukkan data ke database
            DB::table('suplier')->insert($suplier);
    }
}
