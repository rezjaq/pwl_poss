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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'EL01',
                'barang_nama' => 'Asus Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,

            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'EL02',
                'barang_nama' => 'Samsung Smartphone',
                'harga_beli' => 3000000,
                'harga_jual' => 4000000,

            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PA01',
                'barang_nama' => 'Nike T-shirt',
                'harga_beli' => 50000,
                'harga_jual' => 80000,

            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PA02',
                'barang_nama' => 'Levis Jeans',
                'harga_beli' => 100000,
                'harga_jual' => 150000,

            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MK01',
                'barang_nama' => 'Buah Durian',
                'harga_beli' => 75000,
                'harga_jual' => 95000,

            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MK02',
                'barang_nama' => 'Buah Apel',
                'harga_beli' => 20000,
                'harga_jual' => 35000,

            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BK01',
                'barang_nama' => 'Marvel Comic Book',
                'harga_beli' => 50000,
                'harga_jual' => 75000,

            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'BK02',
                'barang_nama' => 'Mathematics Textbook',
                'harga_beli' => 75000,
                'harga_jual' => 100000,

            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PB01',
                'barang_nama' => 'IKEA Desk',
                'harga_beli' => 200000,
                'harga_jual' => 300000,

            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PB02',
                'barang_nama' => 'Office Depot Chair',
                'harga_beli' => 150000,
                'harga_jual' => 250000,

            ]
        ];


        DB::table('m_barang')->insert($data);
    }
}
