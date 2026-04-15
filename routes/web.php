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


Route::get('/ideas', function () {
    $ideas = session()->get('ideas', []);
    return view('ideas', ['ideas' => $ideas]);
});

Route::post('/ideas', function () {
    $ideas = request('ideas');

    session()->push('ideas', $ideas);

    return redirect('/ideas');
});

Route::delete('/ideas', function () {
    session()->forget('ideas');

    return redirect('/ideas');
});