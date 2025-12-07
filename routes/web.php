<?php

use App\Models\Articles;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get("/about", function () {
    return view("about",  ['title' => 'About']);
});

Route::get("/blogs", function () {
    return view("blogs", ['title' => 'Blogs', 'article' => Articles::all()]);
});

Route::get("/blog/{articles:slug}", function (Articles $articles) {
    return view("blogdetail", ['blog' => $articles]);
});

Route::get("/contacts", function () {
    return view("contacts", ['title' => 'Contacts']);
});
