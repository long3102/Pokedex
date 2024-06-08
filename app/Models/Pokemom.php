<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemom extends Model
{
    use HasFactory;
    protected $table = 'pokemons';
    protected $fillable = [
        'name',
        'type_id',
        'height',
        'weight',
        'ability',
        'description',
        'image',
        'hp',
        'attack',
        'defense',
        'special_attack',
        'special_defense',
        'speed',
        'evolution_id',
        'egg_group',
        'habitat',
        'is_legendary',
        'is_mythical',
    ];
    public function pokemomType()
    {
        return $this->belongsTo(PokemomType::class, 'type_id');
    }
}
