<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listPegawai = [
            [
                'id' => \Str::random(8),
                'nama' => 'Hesti',
                'alamat' => 'Serdang Bedagai',
                'level' => 'User',
            ],
            [
                'id' => \Str::random(8),
                'nama' => 'John Sinaga',
                'alamat' => 'Deli Serdang',
                'level' => 'Admin',
            ],
            [
                'id' => \Str::random(8),
                'nama' => 'saut P',
                'alamat' => 'Deli Serdang',
                'level' => 'User',
            ],
        ];
        \DB::table('pegawai')->insert($listPegawai);
    }
}
