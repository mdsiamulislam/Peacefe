<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $listOfArticles = DB::table('articles')->get();
        return view('article.index', ['articles' => $listOfArticles]);
    }

    public function getArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return view('article.details', ['article' => $article]);
    }
}
