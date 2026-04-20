<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Http\Controllers\IdeaController;

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
Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::post('/ideas', [IdeaController::class, 'store']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
Route::delete('/ideas', [IdeaController::class, 'destroyAll']);