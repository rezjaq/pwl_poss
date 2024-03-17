<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Penjualan 1
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 7000000, // Harga Asus Laptop
                'jumlah' => 2, // Jumlah yang terjual

            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 4000000, // Harga Samsung Smartphone
                'jumlah' => 3,

            ],
            // Penjualan 2
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 80000, // Harga Nike T-shirt
                'jumlah' => 5,

            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 150000, // Harga Levi's Jeans
                'jumlah' => 4,

            ],
            // Penjualan 3
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 95000, // Harga Buah Durian
                'jumlah' => 6,

            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 35000, // Harga Buah Apel
                'jumlah' => 3,

            ],
            // Penjualan 4
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 75000, // Harga Marvel Comic Book
                'jumlah' => 8,

            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 100000, // Harga Mathematics Textbook
                'jumlah' => 7,

            ],
            // Penjualan 5
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 300000, // Harga IKEA Desk
                'jumlah' => 10,

            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 250000, // Harga Office Depot Chair
                'jumlah' => 5,

            ],
            // Penjualan 6
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 7000000, // Harga Asus Laptop
                'jumlah' => 3,

            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 4000000, // Harga Samsung Smartphone
                'jumlah' => 2,

            ],
            // Penjualan 7
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 80000, // Harga Nike T-shirt
                'jumlah' => 4,

            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 150000, // Harga Levi's Jeans
                'jumlah' => 3,

            ],
            // Penjualan 8
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 95000, // Harga Buah Durian
                'jumlah' => 7,

            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 35000, // Harga Buah Apel
                'jumlah' => 4,

            ],
            // Penjualan 9
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 75000, // Harga Marvel Comic Book
                'jumlah' => 6,

            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 8,
                'harga' => 100000, // Harga Mathematics Textbook
                'jumlah' => 5,

            ],
            // Penjualan 10
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 300000, // Harga IKEA Desk
                'jumlah' => 9,

            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 250000, // Harga Office Depot Chair
                'jumlah' => 6,

            ],
            // Penjualan 11
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 1,
                'harga' => 7000000, // Harga Asus Laptop
                'jumlah' => 1,

            ],
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 4000000, // Harga Samsung Smartphone
                'jumlah' => 2,

            ],
            // Penjualan 12
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 80000, // Harga Nike T-shirt
                'jumlah' => 3,

            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 150000, // Harga Levi's Jeans
                'jumlah' => 4,

            ],
            // Penjualan 13
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 5,
                'harga' => 95000, // Harga Buah Durian
                'jumlah' => 5,

            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 35000, // Harga Buah Apel
                'jumlah' => 2,

            ],
            // Penjualan 14
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 75000, // Harga Marvel Comic Book
                'jumlah' => 6,

            ],
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 100000, // Harga Mathematics Textbook
                'jumlah' => 3,

            ],
            // Penjualan 15
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 9,
                'harga' => 300000, // Harga IKEA Desk
                'jumlah' => 8,

            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 250000, // Harga Office Depot Chair
                'jumlah' => 4,

            ],

        ];
        // $finalData = [];
        // for ($i = 0; $i < 10; $i++) {
        //     foreach ($data as $item) {
        //         $finalData[] = $item;
        //     }
        // }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
