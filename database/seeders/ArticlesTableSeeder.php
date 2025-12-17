<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articles::factory(100)
            ->recycle(User::factory(10)->create())
            ->recycle(Categories::all())
            ->create();
    }
}
