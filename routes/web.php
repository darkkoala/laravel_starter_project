<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;

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

/*------------------------------  REGISTER / AUTH ROUTES  ------------------------------*/
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');


/*------------------------------  IDEA ROUTES  ------------------------------*/
Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaController::class, 'index']);
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
    Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
});