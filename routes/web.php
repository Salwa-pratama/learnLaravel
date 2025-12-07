<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get("/about", function () {
    return view("about",  ['title' => 'About']);
});


Route::get("/blogs", function () {
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
    return view("blogs", ['title' => 'Blogs', 'article' => $dummyArt]);
});

Route::get("/blog/{slug}", function ($slug) {
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
    $data = Arr::first($dummyArt, function ($item) use ($slug) {
        return $item['slug'] == $slug;
    });

    if (! $data) {
        abort(404);
    };

    return view("blogdetail", ['blog' => $data]);
});



Route::get("/contacts", function () {

    return view("contacts", ['title' => 'Contacts']);
});
