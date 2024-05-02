<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'code' => 'b21',
                'name' => 'Meter',
            ],
            [
                'code' => 'b22',
                'name' => 'Kilogram',
            ],
            [
                'code' => 'b23',
                'name' => 'pcs',
            ],
            [
                'code' => 'b24',
                'name' => 'Liter',
            ],
        ]);
    }
}
