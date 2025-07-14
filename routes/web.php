<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/activity', function () {
    return view('pages.activity');
})->name('activity');

// Route::get('/visi-misi', function () {
//     return view('pages.visi-misi');
// })->name('visi-misi');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');