<?php

namespace Database\Seeders;

use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InsertUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::insert([
            'name' => 'Long Admin',
            'fullname' => 'Nguễn Văn Long',
            'email' => 'admin@gmail.com',
            'phone' => '0932891763',
            'password' => Hash::make(123456),
            'status' => 1,
            'account_type'=>1
        ]);
    }
}
