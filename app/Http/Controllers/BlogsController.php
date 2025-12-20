<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Categories;
use Illuminate\View\View;


class BlogsController extends Controller
{
    public function index(Request $request)
    {
        return view("blogs", [
            "title" => "Blogs",
            "article" => Articles::with(["author", "category"])
                ->latest()
                ->filter($request->only(["search", "category"]))
                ->paginate(10)->withQueryString(),
            "categories" => Categories::all(),
            "activeCategory" => $request->query("category")
        ]);
    }

    public function showDetail(Articles $articles): View
    {
        $relatedArticles = Articles::with(["author", "category"])
            ->where("category_id", $articles->category_id)
            ->where("id", '!=', $articles->id)
            ->latest()
            ->take(8)
            ->get();
        return view("blogdetail", ["blog" => $articles, 'relatedArticles' => $relatedArticles]);
    }
}
