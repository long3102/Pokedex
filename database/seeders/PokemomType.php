<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemomType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pokemom_type')->insert([
            ['name' => 'Nước', 'color' => '#3498db'],
            ['name' => 'Cỏ', 'color' => '#2ecc71'],
            ['name' => 'Đất', 'color' => '#f39c12'],
            ['name' => 'Điện', 'color' => '#f1c40f'],
            ['name' => 'Băng', 'color' => '#1abc9c'],
            ['name' => 'Bọ', 'color' => '#9b59b6'],
            ['name' => 'Quyền đấm', 'color' => '#c0392b'],
            ['name' => 'Bình thường', 'color' => '#95a5a6'],
            ['name' => 'Thép', 'color' => '#95a5a6'],
            ['name' => 'Đá', 'color' => '#34495e'],
            ['name' => 'Cát', 'color' => '#8e44ad'],
            ['name' => 'Tâm linh', 'color' => '#e67e22'],
            ['name' => 'Tối', 'color' => '#7f8c8d'],
            ['name' => 'Rồng', 'color' => '#27ae60'],
            ['name' => 'Tiên', 'color' => '#d35400'],
            ['name' => 'Ma', 'color' => '#2980b9']
        ]);
    }
}
