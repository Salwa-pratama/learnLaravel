<?php
// ini untuk mgasih tau laravel secara sesifik dimana kode ini berada
namespace App\Models;

use Illuminate\Support\Arr;

class Articles
{
    public static function all(): array
    {
        $dummyArt = [
            [
                "id" => 1,
                "slug" => "article-judul-1",
                "title" => "Artikle 1",
                "date" => "Ananda Salwa Pratama | 6 desember 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."
            ],
            [
                "id" => 2,
                "slug" => "article-judul-2",
                "title" => "Artikle 2",
                "date" => "Siabis | 6 desember 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."
            ],
            [
                "id" => 3,
                "slug" => "article-judul-3",
                "title" => "Artikle 3",
                "date" => "myanmar | 2 april 2025",
                "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequatur mollitia dolor, magnam, dolores quaerat fuga eligendi sint, nisi vitae in natus odit. Enim ratione eaque sequi quibusdam id voluptatibus."
            ],

        ];

        return $dummyArt;
    }
    public static function getOne($slug): array
    {
        // Ini Callback
        return Arr::first(static::all(), function ($allData) use ($slug) {
            return $allData["slug"] == $slug;
        });

        // ini arrow function
        // return Arr::first(static::all(), fn($data) => $data['slug'] == $slug);
    }
};
