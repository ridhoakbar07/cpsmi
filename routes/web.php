<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact-us', function () {
    return view('components.landing-page.pages.contact-us');
})->name('contact-us');

Route::get('/activity', function () {
    return view('components.landing-page.pages.activity');
})->name('activity');

Route::get('/about-us', function () {
    return view('components.landing-page.pages.about-us');
})->name('about-us');

Route::get('/services', function () {
    return view('components.landing-page.pages.services');
})->name('services');

Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');

// Route::middleware('web')
//     ->prefix('blogs')
//     ->group(function () {
//         Route::get('/', [PostController::class, 'index'])->name('blog.post.index');
//         Route::get('/all', [PostController::class, 'allPosts'])->name('blog.post.all');
//         Route::get('/search', [PostController::class, 'search'])->name('blog.post.search');
//         Route::get('/{post:slug}', [PostController::class, 'show'])->name('blog.post.show');
//         Route::post('/subscribe', [PostController::class, 'subscribe'])
//             ->middleware('throttle:5,1')
//             ->name('blog.post.subscribe');

//         Route::get('/categories/{category:slug}', [CategoryController::class, 'posts'])->name('blog.category.post');
//         Route::get('/tags/{tag:slug}', [TagController::class, 'posts'])->name('blog.tag.post');

//         Route::post('/posts/{post:slug}/comment', [CommentController::class, 'store'])->middleware('auth')->name('blog.comment.store');
//     });