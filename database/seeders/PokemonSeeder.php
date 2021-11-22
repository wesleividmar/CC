<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::truncate();

        $csvFile = fopen(base_path("database/data/pokemon.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Pokemon::create([
                    "ref" => $data['0'],
                    "name" => $data['1'],
                    "type_1" => $data['2'],
                    "type_2" => $data['3'],
                    "total" => $data['4'],
                    "hp" => $data['5'],
                    "attack" => $data['6'],
                    "defense" => $data['7'],
                    "sp_atk" => $data['8'],
                    "sp_def" => $data['9'],
                    "speed" => $data['10'],
                    "generation" => $data['11'],
                    "legendary" => $data['12']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
