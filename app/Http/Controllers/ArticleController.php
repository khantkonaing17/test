<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();
        // $data = [
        //     ['title' => "First Article"],
        //     ['title' => "Second Article"],
        //     ['title' => "Third Article"],
        // ];

        return view('articles.index', [
            'articles' => $data,
        ]);
    }

    public function detail($id)
    {
        return "Article Controller detail/$id";
    }
}
