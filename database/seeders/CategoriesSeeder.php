<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $categories = [
            ['category' => 'Programming', 'slug' => 'programming'],
            ['category' => 'Kuliner', 'slug' => 'kuliner'],
            ['category' => 'Olah Raga', 'slug' => 'olah-raga'],
            ['category' => 'Design', 'slug' => 'design'],
        ];

        Categories::upsert(
            $categories,
            ['slug'], // unique key
            ['category']  // kolom yang di-update kalau sudah ada
        );
    }
}
