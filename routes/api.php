<?php

use App\Http\Controllers\Api\PokemonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/pokemons', [ApiController::class, 'getAllPokemons']);
Route::get('/pokemons/{id}', [ApiController::class, 'getPokemon']);
Route::post('pokemons', [ApiController::class, 'createPokemon']);
Route::put('pokemons/{id}', [ApiController::class, 'updatePokemon']);
Route::delete('pokemons/{id}', [ApiController::class, 'deletePokemon']);

Route::get('pokemons2', [PokemonController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
