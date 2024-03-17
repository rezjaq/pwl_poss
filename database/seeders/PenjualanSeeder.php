<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Rizqi',
                'penjualan_kode' => 'PJ01',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Reza',
                'penjualan_kode' => 'PJ02',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Danuarta',
                'penjualan_kode' => 'PJ03',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Tenza',
                'penjualan_kode' => 'PJ04',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Kiriyama',
                'penjualan_kode' => 'PJ05',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Juan',
                'penjualan_kode' => 'PJ06',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Felix',
                'penjualan_kode' => 'PJ07',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Filla',
                'penjualan_kode' => 'PJ08',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Ramadhani',
                'penjualan_kode' => 'PJ09',
                'penjualan_tanggal' => now(),

            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Hanif',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => now(),

            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
