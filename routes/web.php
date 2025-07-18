<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/activity', [App\Http\Controllers\HomeController::class, 'activity'])->name('activity');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
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