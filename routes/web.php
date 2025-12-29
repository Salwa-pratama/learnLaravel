<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, "index"])->middleware('auth');


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/about', [AboutController::class, "index"]);
Route::get('/blogs', [BlogsController::class, "index"])->name("blogs");
Route::get('/blog/{articles:slug}', [BlogsController::class, "showDetail"]);
Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Contacts']);
});



/*
|--------------------------------------------------------------------------
| Number of authors writing articles
|--------------------------------------------------------------------------
*/
Route::get("/authors/{slug}", [AuthorController::class, "index"]);





