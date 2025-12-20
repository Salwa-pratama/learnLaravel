<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index($id, Request $request)
    {
        return view("authors",  [
            "title" => "Author Detail",
            "author" => User::findOrFail($id),
            "articles" => Articles::with(["category", "author"])
                ->where("author_id", User::findOrFail($id)->id)
                ->latest()
                ->filter($request->only(["category", "search"]))
                ->get(),
            "categories" => Categories::all(),
            "activeCategory" => $request->query("category")
        ]);
    }
}
