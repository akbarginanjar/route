<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LatbiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $latbiodata = [
            ['id'=>1, 'name'=>'Akbar Ginanjar', 'bornDate'=>'2004-02-25', 'gender'=>'L', 'address'=>'Margaluyu', 'religion'=>'religion', 'age'=>17, 'hobby'=>'Ngoding'],
            ['id'=>2, 'name'=>'Kidam Kudnandi', 'bornDate'=>'2004-05-12', 'gender'=>'L', 'address'=>'Sayuran', 'religion'=>'religion', 'age'=>17, 'hobby'=>'Badminton'],
            ['id'=>3, 'name'=>'Rio Fadli', 'bornDate'=>'2003-10-21', 'gender'=>'L', 'address'=>'Sayuran', 'religion'=>'religion', 'age'=>18, 'hobby'=>'Tidur'],
            ['id'=>4, 'name'=>'Priyadi Sentosa', 'bornDate'=>'2003-03-15', 'gender'=>'L', 'address'=>'Cibaduyut', 'religion'=>'religion', 'age'=>18, 'hobby'=>'Berenang'],
            ['id'=>5, 'name'=>'Wildan Diar', 'bornDate'=>'2004-08-17', 'gender'=>'L', 'address'=>'Rancamanyar', 'religion'=>'religion', 'age'=>17, 'hobby'=>'Memancing'],
            ];

            // masukkan data ke database
            DB::table('latbiodata')->insert($latbiodata);
    }
}
// ['id'=>'', 'name'=>'', 'bornDate'=>'', 'gender'=>'', 'address'=>'', 'religion'=>'', 'age'=>'', 'hobby'=>''],
