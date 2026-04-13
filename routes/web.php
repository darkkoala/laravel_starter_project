<?php

use Illuminate\Support\Facades\Route;

// static pages
Route::view('/', 'welcome');
Route::view('/about', 'about');

// complex routes
Route::get('/contact', function () {
    return view('contact');
});