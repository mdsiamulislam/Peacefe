<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {

        // Clear existing data
        DB::table('articles')->truncate();

        $json = File::get(path: 'database/json/articles.json');
        $listOfArticles = json_decode($json, true);

        foreach ($listOfArticles as $articleData) {
            Article::create(
                [
                    'title' => $articleData['title'],
                    'subtitle' => $articleData['subtitle'],
                    'content' => $articleData['content'],
                    'author' => $articleData['author'],
                    'image_url' => $articleData['image_url'],
                    'created_at' => now(),
                    'updated_at' => now(),


                ]
            );
        }
    }
}
