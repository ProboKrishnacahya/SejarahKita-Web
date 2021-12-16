<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//* Game
Route::resource('game', GameController::class);
Route::get('playing-game', [GameController::class, 'playingGame'])->name('playingGame');

//* Leaderboard
Route::resource('leaderboard', LeaderboardController::class);

//* Home & Profile
Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('', [HomeController::class, 'adminHome'])->name('user');

    Route::middleware(['admin'])->group(function () {
        Route::get('admin/profile', [AdminController::class, 'edit'])->name('admin.profile');
        Route::resource('question', QuestionController::class);
        Route::resource('level', LevelController::class);
        // Route::get('', [AdminController::class, 'index']);
    });

    Route::middleware(['user'])->group(function () {
        Route::get('profile', [StudentController::class, 'edit'])->name('profile');
        Route::get('playing-history', [StudentController::class, 'show'])->name('playing-history');
        // Route::get('', [StudentController::class, 'index'])->name('user');
    });
});
