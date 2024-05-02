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
        DB::table('satuans')->insert([
            [
            'kode_satuan' => 'Pcs',
            'nama_satuan' => 'Pieces',  
            ],
            [
            'kode_satuan' => 'Ls',
            'nama_satuan' => 'Lusin',
            ],
            [
            'kode_satuan' => 'Pk',
            'nama_satuan' => 'Pack',
            ],
        ]);
    }
}
