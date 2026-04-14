<?php

use Illuminate\Support\Facades\Route;

// static pages
Route::view('/about', 'about');

// complex routes
Route::get('/contact', function () {
    return view('contact');
});

// views with data
Route::view('/', 'welcome', [
    'greeting' => 'Hello',
    'name' => request('name', 'World')
]);