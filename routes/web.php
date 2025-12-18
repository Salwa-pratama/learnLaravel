<?php

use App\Http\Controllers\AuthController;
use App\Models\Articles;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


Route::get('/blogs', function (Request $request) {
    return view('blogs', [
        'title' => 'Blogs',
        'article' => Articles::with(["author", "category"])
            ->latest()
            ->filter($request->only(["search", "category"]))
            ->paginate(10)->withQueryString(),
        'categories' => Categories::all(),
        'activeCategory' => $request->query("category")
    ]);
})->name("blogs");


Route::get('/blog/{articles:slug}', function (Articles $articles) {
    $relatedArticles = Articles::with(["author", "category"])
        ->where("category_id", $articles->category_id)
        ->where("id", '!=', $articles->id)
        ->take(8)
        ->latest()
        ->get();
    return view('blogdetail', ['blog' => $articles, 'relatedArticles' => $relatedArticles]);
});

Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Contacts']);
});

/*
|--------------------------------------------------------------------------
| Number of authors writing articles
|--------------------------------------------------------------------------
*/



Route::get("/authors/{id}", function ($id, Request $request) {
    return view("authors", data: [
        "title" => "Authors Detail",
        "author" => User::findOrFail($id),
        "articles" => Articles::with(["category", "author"])
            ->where("author_id", User::findOrFail($id)->id)
            ->latest()
            ->filter($request->only(["category", "search"]))
            ->get(),
        "categories" => Categories::all(),
        'activeCategory' => $request->query("category")
    ]);
});
