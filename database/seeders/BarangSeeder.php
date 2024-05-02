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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'TSTRN1',
                'nama_barang' => 'T-Shirt Turnstile',
                'harga_barang' => 900000,
                'deskripsi_barang' => 'Official Merchandise Turnstile Band',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'TSCP1',
                'nama_barang' => 'Trasher Cargo Pants',
                'harga_barang' => 1000000,
                'deskripsi_barang' => 'Trasher Magazine Cargo Pants Black',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'CRZSV1',
                'nama_barang' => 'Crooz Stiker Vinyl',
                'harga_barang' => 50000,
                'deskripsi_barang' => 'Crooz Stiker Pack Cartoon Edition',
                'satuan_id' => 3
            ],
        ]);
    }
}
