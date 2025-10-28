<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WisdomController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.auth.index');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
});

Route::get('/admin/articles', function () {
    return view('admin.content.article.index');
});

Route::get('/admin/article/new', function () {
    return view('admin.content.article.new_article');
})->name('new_article');

Route::get('/admin/videos', function () {
    return view('admin.content.video.index');
});

Route::get('/admin/video/new', function () {
    return view('admin.content.video.new_video');
})->name('new_video');

Route::get('/admin/wisdoms', function () {
    return view('admin.wisdom.index');
});
Route::get('/admin/wisdom/new', function () {
    return view('admin.wisdom.new_wisdom');
})->name('new_wisdom');



Route::get('/', [WisdomController::class, 'showWisdom']);


Route::get('/about', function () {
    return view('about.index');
});

Route::get('/islam', function () {
    return view('islam.index');
});

Route::get('/video', function () {

    $listOfCategories = [
        'All',
        'Prophet Muhammad (PBUH)',
        'Islamic Teachings',
        'History of Islam',
        'Interfaith Dialogue',
        'Contemporary Issues'
    ];

    $listOfVideos = [
        [
            'title' => 'Similarities between Jesus and Muhammad',
            'description' => 'Explore the common ground and shared values in their teachings.',
            'url' => 'https://www.youtube.com/embed/Ea1gVO53lDY?si=jt7RveIIxIDfFdWa'
        ],
        [
            'title' => 'Understanding the Five Pillars of Islam',
            'description' => 'A deep dive into the fundamental beliefs and practices of Islam.',
            'url' => 'https://www.youtube.com/embed/3h4b8j9XG2A?si=example2'
        ],
        [
            'title' => 'The Life of Prophet Muhammad',
            'description' => 'An exploration of the life and teachings of the Prophet Muhammad.',
            'url' => 'https://www.youtube.com/embed/5d6c7e8f9g0?si=example3'
        ],
    ];

    return view('video.index', ['categories' => $listOfCategories, 'videos' => $listOfVideos]);
});

Route::get('/article', [ArticleController::class, 'getArticles']);
Route::get('/article/{id}', [ArticleController::class, 'getArticle'])->name('article.details');
