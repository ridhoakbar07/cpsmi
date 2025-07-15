<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

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