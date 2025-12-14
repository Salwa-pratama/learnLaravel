<?php

use App\Http\Controllers\AuthController;
use App\Models\Articles;
use Illuminate\Support\Facades\Route;


// Login View
Route::get("/", [AuthController::class, "loginForm"])->name("login");
Route::post("/login", [AuthController::class, "login"]);
Route::post('/logout', function () {
    session()->flush();
    return redirect('/');
});


Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
})->middleware("auth");

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
