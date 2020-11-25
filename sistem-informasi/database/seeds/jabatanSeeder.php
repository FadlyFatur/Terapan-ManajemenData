<?php

use Illuminate\Database\Seeder;
use App\jabatan;

class jabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'njabatan' => 'Kepala Desa'
            ],
            [
                'njabatan' => 'Ketua RW 02'
            ],
            [
                'njabatan' => 'Sekretaris'
            ],
            [
                'njabatan' => 'Sekretaris 2'
            ],
            [
                'njabatan' => 'Bendahara'
            ],
            [
                'njabatan' => 'Ketua PKK RW 02'
            ],
            [
                'njabatan' => 'Ketua RT 01'
            ],
            [
                'njabatan' => 'Ketua RT 02'
            ],
            [
                'njabatan' => 'Ketua RT 03'
            ],
            [
                'njabatan' => 'Ketua RT 04'
            ],
            [
                'njabatan' => 'Ketua RT 05'
            ],
            [
                'njabatan' => 'Ketua RT 06'
            ],
            [
                'njabatan' => 'Ketua RT 07'
            ],
            [
                'njabatan' => 'Staff'
            ],
            [
                'njabatan' => 'Karyawan'
            ],
            [
                'njabatan' => 'Linmas'
            ],
        ];

        \DB::table('jabatans')->insert($data);
        
    }
}
