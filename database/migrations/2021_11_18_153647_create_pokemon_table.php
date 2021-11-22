<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('ref');
            $table->string('name');
            $table->string('type_1');
            $table->string('type_2');
            $table->smallInteger('total');
            $table->smallInteger('hp');
            $table->smallInteger('attack');
            $table->smallInteger('defense');
            $table->smallInteger('sp_atk');
            $table->smallInteger('sp_def');
            $table->smallInteger('speed');
            $table->smallInteger('generation');
            $table->boolean('legendary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
