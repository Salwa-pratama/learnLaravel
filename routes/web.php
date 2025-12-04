<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get("/about", function () {
    return view("about",  ['title' => 'About']);
});


Route::get("/blogs", function () {
    return view("blogs" ,['title' => 'Blogs']);
});

Route::get("/contacts" , function () {

    return view("contacts", ['title' => 'Contacts']);
});

