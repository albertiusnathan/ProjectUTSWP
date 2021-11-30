<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'id' => 1,
                'book_id' => 1,
                'author' => 'MiMikail',
                'publisher' => 'MiMikail Publishing',
                'year' => 2001,
                'description' => 'Tepanus terhisap ke lubang hitam dan terlempar ke planet Saturnus!'
            ],
            [
                'id' => 2,
                'book_id' => 2,
                'author' => 'Boe Tjhin',
                'publisher' => 'Romansa Literatures',
                'year' => 2021,
                'description' => 'Baba Boey, pemuda lajang menemukan cintanya di dunia maya'
            ],
            [
                'id' => 3,
                'book_id' => 3,
                'author' => 'Keri Boutan',
                'publisher' => 'Piring Terbang Publishing',
                'year' => 1997,
                'description' => 'Beli gundam tapi ga lapor istri? Siap-siap ada piring terbang'
            ],
            [
                'id' => 4,
                'book_id' => 4,
                'author' => 'Tepanuz',
                'publisher' => 'The Panoezz Publishing',
                'year' => 1997,
                'description' => 'Setelah menguasai Saturnus, Tepanuz pun memutuskan untuk mengambil alih planet lainnya'
            ],
            [
                'id' => 5,
                'book_id' => 5,
                'author' => 'Dr Matt',
                'publisher' => 'Matheroid Publishing',
                'year' => 2019,
                'description' => 'Anak SD sekarang jago juga ya'
            ],
            [
                'id' => 6,
                'book_id' => 6,
                'author' => 'AdultReads',
                'publisher' => 'AdultReads Publishing',
                'year' => 2020,
                'description' => 'Mengurus pajak adalah hal paling utama untuk orang dewasa'
            ],
            [
                'id' => 7,
                'book_id' => 7,
                'author' => 'MalingSia',
                'publisher' => 'Dee Pee Ar Publishing',
                'year' => 2018,
                'description' => 'Buku ini ditanda tangani oleh ketua Dee Pee Ar yang menilep dana BankSoes'
            ],
            [
                'id' => 8,
                'book_id' => 8,
                'author' => 'The Milkers',
                'publisher' => 'Milkers Go Wrong Publishing',
                'year' => 1964,
                'description' => 'Ayah pergi setelah Ibu dinyatakan hamil, Ayah pun pergi membeli susu dan tidak kunjung kembali'
            ],
            [
                'id' => 9,
                'book_id' => 9,
                'author' => 'LightReads',
                'publisher' => 'Ringan Boss Publishing',
                'year' => 2019,
                'description' => 'Bukunya ringan, seperti tanpa kaca'
            ],
            [
                'id' => 10,
                'book_id' => 10,
                'author' => 'Alberg',
                'publisher' => 'Da Bergerius Publishing',
                'year' => 2021,
                'description' => 'Buku ini berisi kebijaksaan seorang sosok yang bernama JasnoKennte'
            ]
        ]);
    }
}
