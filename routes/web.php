<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
// use App\Http\Controllers\Auth\LoginController;
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

//this is just a work-branch commit test

Route::get('/', [PlayerController::class, 'index'])->name('player_index');
Route::post('/players', [PlayerController::class, 'store'])->name('players_store');
Route::delete('/players/{id}', [PlayerController::class, 'destroy'])->name('players_destroy');

Route::get('/players/edit/{id}', [PlayerController::class, 'edit'])->name('players_edit');
Route::put('/players/update/{id}', [PlayerController::class, 'update'])->name('players_update');

Route::get('/login', [PlayerController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PlayerController::class, 'login']); 