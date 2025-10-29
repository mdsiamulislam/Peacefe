<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WisdomController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.auth.index');
});

Route::get('/admin/createadmin', function () {
    return view('admin.auth.addadmin');
})->name('admin.createAdmin');

Route::post('/admin/addadmin', [UserController::class, 'addAdmin'])->name('admin.add');
Route::post('/admin/login', [UserController::class, 'login'])->name('admin.login');
Route::get('/admin/deletealladmins', [UserController::class, 'deleteAllUsers']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard');

Route::get('/admin/articles', [ArticleController::class, 'getArticlesForAdmin'])->name('admin.articles');
Route::get('/admin/article/delete/{id}', [ArticleController::class, 'deleteArticle'])->name('admin.article.delete');
Route::post('/admin/article/create', [ArticleController::class, 'createArticle'])->name('admin.article.create');
Route::put('/admin/article/update/{id}', [ArticleController::class, 'updateArticle'])->name('admin.article.update');

Route::get('/admin/article/{id}', [ArticleController::class, 'getArticleForAdmin'])->name('admin.article.editview');

Route::get('/admin/article/new', function () {
    return view('admin.content.article.new_article');
})->name('new_article');


Route::get('/admin/videos', [VideoController::class, 'getAllVideosForAdmin'])->name('admin.videos');
Route::post('/admin/video/create', [VideoController::class, 'addVideo'])->name('video.add');
Route::get('/admin/video/delete/{id}', [VideoController::class, 'deleteVideo'])->name('admin.video.delete');
Route::put('/admin/video/update/{id}', [VideoController::class, 'updateVideo'])->name('admin.video.update');

Route::get('/admin/video/edit/{id}', [VideoController::class, 'getVideoDetails'])->name('admin.video.edit');

Route::get('/admin/wisdoms', [WisdomController::class, 'showWisdomForAdmin'])->name('admin.wisdoms');
Route::post('/admin/wisdom/create', [WisdomController::class, 'createWisdom'])->name('admin.wisdom.create');
Route::get('/admin/wisdom/delete/{id}', [WisdomController::class, 'deleteWisdom'])->name('admin.wisdom.delete');
Route::put('/admin/wisdom/update/{id}', [WisdomController::class, 'updateWisdom'])->name('admin.wisdom.update');

Route::get('/admin/wisdom/{id}', [WisdomController::class, 'showWisdomDetail'])->name('admin.wisdom.edit');
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
