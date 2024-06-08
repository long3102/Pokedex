<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('pokemom_type');
            $table->float('height');
            $table->float('weight');
            $table->string('ability')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            // Stat Columns
            $table->unsignedSmallInteger('hp'); // Health Points
            $table->unsignedSmallInteger('attack');
            $table->unsignedSmallInteger('defense');
            $table->unsignedSmallInteger('special_attack');
            $table->unsignedSmallInteger('special_defense');
            $table->unsignedSmallInteger('speed');

            // Optional Columns for Future Expansion
            $table->unsignedBigInteger('evolution_id')->nullable(); // Foreign key to 'evolutions' table for evolution chain
            $table->string('egg_group')->nullable(); // Egg group for breeding
            $table->string('habitat')->nullable(); // Habitat where Pokémom is found
            $table->boolean('is_legendary')->default(false); // Flag for legendary Pokémom
            $table->boolean('is_mythical')->default(false); // Flag for mythical Pokémom
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
