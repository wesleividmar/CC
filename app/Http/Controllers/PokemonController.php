<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaPokemons = json_encode(Pokemon::all('ref','name'));

        return view('pokemon.index',compact('listaPokemons'));
    }

}
