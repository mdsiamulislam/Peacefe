<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.auth.index');
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


Route::get('/', function () {

    $listOfWisdom = [
        [
            'quote' => 'The best among you are those who have the best manners and character.',
            'source' => 'Prophet (PBUH)'
        ],
        [
            'quote' => 'Seek knowledge from the cradle to the grave.',
            'source' => ' Muhammad (PBUH)'
        ],
        [
            'quote' => 'The ink of the scholar is more sacred than the blood of the martyr.',
            'source' => '(PBUH)'
        ],
        [
            'quote' => 'Kindness is a mark of faith, and whoever is not kind has no faith.',
            'source' => 'Prophet Muhammad (PBUH)'
        ],
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

    return view('index', ['wisdoms' => $listOfWisdom, 'videos' => $listOfVideos]);
});

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

Route::get('/article', function () {

    $listOfArticles = [
        [
            'date' => '2023-10-15',
            'author' => 'Admin',
            'title' => 'The Importance of Compassion in Islam',
            'summary' => 'An exploration of how compassion is emphasized in Islamic teachings and its impact on society.',
            'image_url' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470',
            'url' => '/article/compassion-in-islam'
        ],
        [
            'date' => '2023-11-05',
            'author' => 'Admin',
            'title' => 'The Role of Women in Islam',
            'summary' => 'An examination of the status and rights of women in Islamic teachings.',
            'image_url' => 'https://images.unsplash.com/photo-1512632578888-169bbbc64f33?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470',
            'url' => '/article/role-of-women-in-islam'
        ]
    ];


    return view('article.index', ['articles' => $listOfArticles]);
});
