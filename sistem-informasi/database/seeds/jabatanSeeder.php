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
                'nama_jabatan' => 'Kepala Desa'
            ],
            [
                'nama_jabatan' => 'Ketua RW'
            ],
            [
                'nama_jabatan' => 'Ketua RT'
            ],
            [
                'nama_jabatan' => 'Sekretaris'
            ],
            [
                'nama_jabatan' => 'Bendahara'
            ],
            [
                'nama_jabatan' => 'Staff'
            ],
        ];

        \DB::table('jabatans')->insert($data);
        
    }
}
