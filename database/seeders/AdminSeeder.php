<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Gustavs Garde',
                'email' => 'gustavsgarde1022@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // Assuming 1 is for admin role
            ],
            [
                'name' => 'Marcis Darguzs',
                'email' => 'marcis.darguzs9@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // Assuming 2 is for registered role
            ],
        ]);
    }
}



