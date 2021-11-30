<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke db category
        //harus migrate:fresh utk update data
        DB::table('categories')->insert([
            [
                'id' => 1,
                'category' => 'Non-fiksi'
            ],
            [
                'id' => 2,
                'category' => 'Roman'
            ],
            [
                'id' => 3,
                'category' => 'Historikal'
            ],
            [
                'id' => 4,
                'category' => 'Fiksi'
            ],
            [
                'id' => 5,
                'category' => 'Anak-anak'
            ],
            [
                'id' => 6,
                'category' => 'Dewasa'
            ],
            [
                'id' => 7,
                'category' => 'Edukasi'
            ],
            [
                'id' => 8,
                'category' => 'Misteri'
            ],
            [
                'id' => 9,
                'category' => 'Novel Ringan'
            ],
            [
                'id' => 10,
                'category' => 'Antologi'
            ]
        ]);
    }
}
