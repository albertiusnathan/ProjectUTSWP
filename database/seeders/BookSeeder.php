<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'title' => 'Petualangan Tepanus di Saturnus'
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'title' => 'Kisah Kasih WFH'
            ],
            [
                'id' => 3,
                'category_id' => 3,
                'title' => 'Asal Mulanya Suatu Pertikaian'
            ],
            [
                'id' => 4,
                'category_id' => 4,
                'title' => 'Planet Wars'
            ],
            [
                'id' => 5,
                'category_id' => 5,
                'title' => 'Mari Berhitung Integral untuk SD kelas III'
            ],
            [
                'id' => 6,
                'category_id' => 6,
                'title' => 'Cara Membayar Pajak 101'
            ],
            [
                'id' => 7,
                'category_id' => 7,
                'title' => 'Tips&Tricks Maling Paling Tokcer'
            ],
            [
                'id' => 8,
                'category_id' => 8,
                'title' => 'Kemanakah Ayah setelah membeli susu?'
            ],
            [
                'id' => 9,
                'category_id' => 9,
                'title' => 'Novel Lima Gram'
            ],
            [
                'id' => 10,
                'category_id' => 10,
                'title' => 'Kumpulan Kata Bijak JasnoKennte'
            ]
        ]);
    }
}
