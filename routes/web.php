<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/api', [App\Http\Controllers\HomeController::class, 'index'])->name('api');

Route::middleware('auth')->prefix('cc')->group(function () {
    //Route::resource('pokemons', PokemonController::class);
    Route::get('pokemons', [PokemonController::class,'index']);
});


