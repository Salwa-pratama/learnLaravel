<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "slug" => "article-judul-1",
                "title" => "Artikle 1",
                "author_and_date" => "Ananda Salwa Pratama | 6 desember 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."
            ],
            [
                "slug" => "article-judul-2",
                "title" => "Artikle 2",
                "author_and_date" => "Siabis | 6 desember 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."
            ],
            [
                "slug" => "article-judul-3",
                "title" => "Artikle 3",
                "author_and_date" => "myanmar | 2 april 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."
            ],
            [
                "slug" => "article-judul-4",
                "title" => "Artikle 4",
                "author_and_date" => "arab | 04 November 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."

            ]
        ];

        foreach ($data as $item) {
            Article::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
