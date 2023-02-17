<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_buku = [
            [
                'id' => \Str::random(8),
                'namabuku' => 'Programmer',
                'penerbit' => 'a',
                'image' => 'kosong.png',
            ],
            [
                'id' => \Str::random(8),
                'namabuku' => 'MySqli',
                'penerbit' => 'b',
                'image' => 'kosong.png',
            ],
            [
                'id' => \Str::random(8),
                'namabuku' => 'Siber Security',
                'penerbit' => 'c',
                'image' => 'kosong.png',
            ],
        ];
        \DB::table('buku')->insert($list_buku);
    }
}
