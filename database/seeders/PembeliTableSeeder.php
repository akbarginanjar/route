<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['id_pembeli'=>1, 'nama'=>'Akbar Ginanjar', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Margaluyu', 'kode_pos'=>47581, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-02-22'],
            ['id_pembeli'=>2, 'nama'=>'Kidam Kusnandi', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Sayuran', 'kode_pos'=>23423, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-03-05'],
            ['id_pembeli'=>3, 'nama'=>'Rio Fadli', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Cibaduyut', 'kode_pos'=>12312, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-04-12'],
            ['id_pembeli'=>4, 'nama'=>'Priyadi Sentosa', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Sayuran', 'kode_pos'=>34323, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-07-16'],
            ['id_pembeli'=>5, 'nama'=>'Wildan Diar', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Rancamanyar', 'kode_pos'=>86787, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-08-07'],
            ];
            // masukkan data ke database
            DB::table('pembeli')->insert($pembeli);
    }
}
