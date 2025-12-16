<?php

use App\Http\Controllers\AuthController;
use App\Models\Articles;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

// Login
Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
})->middleware('auth');


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blogs', function () {
    return view('blogs', [
        'title' => 'Blogs',
        'article' => Articles::all()
    ]);
});

Route::get('/blog/{articles:slug}', function (Articles $articles) {
    return view('blogdetail', ['blog' => $articles]);
});

Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Contacts']);
});
