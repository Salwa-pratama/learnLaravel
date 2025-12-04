<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/about", function () {
    return view("about", ["nama" => "Ananda Salwa Pratama"]);
});


Route::get("/blogs", function () {
    return view("blogs");
});

Route::get("/contacts" , function () {
        $contacts = [
        [
            "name" => "Andi",
            "phone" => "081234567890"
        ],
        [
            "name" => "Budi",
            "phone" => "082334567890"
        ],
        [
            "name" => "Cici",
            "phone" => "083434567890"
        ],
    ];
    return view("contacts", compact('contacts'));
});

