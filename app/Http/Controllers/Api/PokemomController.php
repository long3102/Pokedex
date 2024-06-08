<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PokemomController extends Controller
{
    //
    /**
     * Retrieves all Pokemon from the database.
     *
     * This function uses the `all()` method of the `Pokemom` model to retrieve all
     * Pokemon from the database. It then passes the result to the `returnResult()`
     * method to format and return the data.
     *
     * @return array The formatted result of the `returnResult()` method.
     */
    public function getAll(){
        $pokemons = \App\Models\Pokemom::all();
        foreach ($pokemons as $key => $value) {
            $pokemons[$key]['image'] = asset('storage/uploads/' . $value['image']);
        }
        return $this->returnResult($pokemons);
    }

    /**
     * Retrieves a specific Pokemon from the database.
     *
     * This function uses the `find()` method of the `Pokemom` model to retrieve
     * a specific Pokemon from the database. It then passes the result to the
     * `returnResult()` method to format and return the data.
     *
     * @param int $id The ID of the Pokemon to retrieve.
     *
     * @return array The formatted result of the `returnResult()` method.
     */
    public function detail($id){
        $pokemons = \App\Models\Pokemom::with('pokemomType')->find($id);
        $pokemons['image'] = asset('storage/uploads/' . $pokemons['image']);
        return $this->returnResult($pokemons);
    }
}
