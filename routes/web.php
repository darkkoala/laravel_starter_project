<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

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




/*------------------------------  IDEA ROUTES  ------------------------------*/
// index
Route::get('/ideas', function () {

    $ideas = Idea::all();

    return view('ideas/index', ['ideas' => $ideas]);
});

// show
Route::get('/ideas/{idea}', function (Idea $idea) {

    return view('ideas/show', ['idea' => $idea]);
});

// store
Route::post('/ideas', function () {

    Idea::create([
        'description' => request('description'),
        'state' => 'pending'
    ]);

    return redirect('/ideas');
});

// edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {

    return view('ideas/edit', ['idea' => $idea]);
});

// update
Route::patch('/ideas/{idea}', function (Idea $idea) {

    $idea->update([
        'description' => request('description')
    ]);

    return redirect('/ideas/' . $idea->id);
});

// destroy all
Route::delete('/ideas', function () {
    Idea::truncate();

    return redirect('/ideas');
});

// destroy one
Route::delete('/ideas/{idea}', function (Idea $idea) {

    $idea->delete();

    return redirect('/ideas');
});