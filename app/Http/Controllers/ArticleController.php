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

    public function getArticleForAdmin($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return view('admin.content.article.new_article', ['article' => $article]);
    }



    public function getArticlesForAdmin()
    {
        $listOfArticles = DB::table('articles')->get();
        return view('admin.content.article.index', ['articles' => $listOfArticles]);
    }

    public function createArticle(Request $request)
    {
        DB::table('articles')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'image_url' => $request->input('image_url'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.articles');

        dd($request->all());
    }

    public function deleteArticle($id)
    {
        DB::table('articles')->where('id', $id)->delete();
        return redirect()->route('admin.articles');
    }

    // Update article method can be added here
    public function updateArticle(Request $request, $id)
    {
        DB::table('articles')->where('id', $id)->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'image_url' => $request->input('image_url'),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.articles');
    }
}
