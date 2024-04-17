<?php

use App\Http\Controllers\Genaral\{PostController, CommentController, LikeController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group( function () {

    Route::view('profile', 'profile')->name('profile');

    Route::resources([
        'galeri-foto'   => PostController::class,
        'replies'      => CommentController::class,
        'likes'        => LikeController::class,
    ]);
});

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__.'/auth.php';
