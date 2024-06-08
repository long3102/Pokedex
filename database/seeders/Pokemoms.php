<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pokemoms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
            [
                'name' => 'Pikachu',
                'type_id' => 20, // Electric type ID (giả sử bạn có một bảng 'pokemon_types')
                'height' => 0.4, // Chiều cao tính bằng mét
                'weight' => 6.0, // Cân nặng tính bằng kilogram
                'ability' => 'Static',
                'description' => 'The electric mouse Pokémon. It can store electricity in its cheeks and discharge it through its tail.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/a/a6/Pok%C3%A9mon_Pikachu_art.png',
                'hp' => 35,
                'attack' => 55,
                'defense' => 40,
                'special_attack' => 55,
                'special_defense' => 50,
                'speed' => 90,
            ],
        ]);
    }
}
