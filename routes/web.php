<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WisdomController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.auth.index');
});

Route::post('/admin/addadmin', [UserController::class, 'addAdmin'])->name('admin.add');
Route::get('/admin/deletealladmins', [UserController::class, 'deleteAllUsers']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard');

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

Route::get('/video', [VideoController::class, 'getAllVideos']);

Route::get('/article', [ArticleController::class, 'getArticles']);
Route::get('/article/{id}', [ArticleController::class, 'getArticle'])->name('article.details');

Route::get('/others', function () {
    return view('links.index');
});
