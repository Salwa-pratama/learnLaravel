<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(String $slug, Request $request)

    {
        $author = User::whereRaw(
            "LOWER(REPLACE(CONCAT(first_name, '-', last_name), ' ', '-')) = ?",
            [$slug]
        )->firstOrFail();


        return view("authors",  [
            "title" => "Author Detail",
            "author" => $author,
            "articles" => $author->articles()
                ->with(['category', 'author'])
                ->latest()
                ->filter($request->only(["category", "search"]))
                ->get(),

            "categories" => Categories::all(),
            "activeCategory" => $request->query("category")
        ]);
    }
}
