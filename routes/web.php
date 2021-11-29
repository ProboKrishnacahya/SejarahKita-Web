<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//* Home
Route::get('/', [HomeController::class, 'home']);

//* Game
Route::resource('game', GameController::class);

//* Leaderboard
Route::resource('leaderboard', LeaderboardController::class);
