<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/player', function () {
//     return view('playerinfo');
// });



Route::get('/', [PlayerController::class, 'index'])->name('player_index');
Route::post('/players', [PlayerController::class, 'store'])->name('players_store');
Route::delete('/players/{id}', [PlayerController::class, 'destroy'])->name('players_destroy');

Route::get('/players/edit/{id}', [PlayerController::class, 'edit'])->name('players_edit');
Route::put('/players/update/{id}', [PlayerController::class, 'update'])->name('players_update');