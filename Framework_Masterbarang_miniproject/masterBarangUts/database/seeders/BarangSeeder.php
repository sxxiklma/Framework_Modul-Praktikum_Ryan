<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item')->insert([
            [
                'code' => 'C21',
                'name' => 'Selang PE',
                'harga'=> '2000',
                'deskripsi' => 'irigasi hidroponik',
                'satuan_id' => 1
            ],
            [
                'code' => 'c22',
                'name' => 'peatmoss pindstrup',
                'harga'=> '8000',
                'deskripsi' => 'media tanam',
                'satuan_id' => 2
            ],
            [
                'code' => 'c23',
                'name' => 'Pupuk mikro npk',
                'harga'=> '10000',
                'deskripsi' => 'pupuk',
                'satuan_id' => 3
            ],
            [
                'code' => 'c24',
                'name' => 'Ab mix cair',
                'harga'=> '12000',
                'deskripsi' => 'Nutrisi Hidroponik',
                'satuan_id' => 4
            ],
        ]);
    }
}
