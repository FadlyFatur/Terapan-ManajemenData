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
                'njabatan' => 'Ketua RW'
            ],
            [
                'njabatan' => 'Ketua RT'
            ],
            [
                'njabatan' => 'Sekretaris'
            ],
            [
                'njabatan' => 'Bendahara'
            ],
            [
                'njabatan' => 'Staff'
            ],
        ];

        \DB::table('jabatans')->insert($data);
        
    }
}
