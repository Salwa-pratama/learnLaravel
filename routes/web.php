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
    $search = $request->query("search");
    
    $categories = Categories::all();
    $activeCategory = $request->query('category');
    $articlesEager = Articles::with(['author', 'category'])
        ->when($activeCategory, function ($query) use ($activeCategory) {
            $query->whereHas('category', function ($q) use ($activeCategory) {
                $q->where('slug', $activeCategory);
            });
        })
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('isi', 'like', "%{$search}%");
            });
        })
        ->latest()
        ->get();
    return view('blogs', [
        'title' => 'Blogs',
        'article' => $articlesEager,
        'categories' => $categories,
        'activeCategory' => $activeCategory
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



Route::get("/authors/{id}", function ($id) {
    $author = User::with(["articles.category", "articles.author"])->findOrFail($id);
    return view("authors", data: [
        "title" => "Authors Detail",
        "author" => $author
    ]);
});
