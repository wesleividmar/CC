<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllPokemons()
    {
        return response()->json(Pokemon::get());
    }

    public function createPokemon(Request $request)
    {
        $pokemon = new Pokemon;
        $pokemon->ref = $request->ref;
        $pokemon->name = $request->name;
        $pokemon->type_1 = $request->type_1;
        $pokemon->type_2 = $request->type_2;
        $pokemon->total = $request->total;
        $pokemon->hp = $request->hp;
        $pokemon->attack = $request->attack;
        $pokemon->defense = $request->defense;
        $pokemon->sp_atk = $request->sp_atk;
        $pokemon->sp_def = $request->sp_def;
        $pokemon->speed = $request->speed;
        $pokemon->generation = $request->generation;
        $pokemon->legendary = boolval($request->legendary);
        $pokemon->save();

        return response()->json([
            "message" => "pokemon record created"
        ], 201);
    }

    public function getPokemon($ref)
    {
        if (Pokemon::where('ref', $ref)->exists()) {
            return response()->json(Pokemon::where('ref', $ref)->get());
        } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
        }
    }

    public function updatePokemon(Request $request, $id)
    {
        if (Pokemon::where('id', $id)->exists()) {
            $pokemon = Pokemon::find($id);
            $pokemon->ref = is_null($request->ref) ? $pokemon->ref : $request->ref;
            $pokemon->name = is_null($request->name) ? $pokemon->name : $request->name;
            $pokemon->type_1 = is_null($request->type_1) ? $pokemon->type_1 : $request->type_1;
            $pokemon->type_2 = is_null($request->type_2) ? $pokemon->type_2 : $request->type_2;
            $pokemon->total = is_null($request->total) ? $pokemon->total : $request->total;
            $pokemon->hp = is_null($request->hp) ? $pokemon->hp : $request->hp;
            $pokemon->attack = is_null($request->attack) ? $pokemon->attack : $request->attack;
            $pokemon->defense = is_null($request->defense) ? $pokemon->defense : $request->defense;
            $pokemon->sp_atk = is_null($request->sp_atk) ? $pokemon->sp_atk : $request->sp_atk;
            $pokemon->sp_def = is_null($request->sp_def) ? $pokemon->sp_def : $request->sp_def;
            $pokemon->speed = is_null($request->speed) ? $pokemon->speed : $request->speed;
            $pokemon->generation = is_null($request->generation) ? $pokemon->generation : $request->generation;
            $pokemon->legendary = is_null($request->legendary) ? $pokemon->legendary : $request->legendary;

            $pokemon->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Pokemon not found"
            ], 404);
        }
    }

    public function deletePokemon($id)
    {
        if (Pokemon::where('id', $id)->exists()) {
            $pokemon = Pokemon::find($id);
            $pokemon->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Pokemon not found"
            ], 404);
        }
    }
}
