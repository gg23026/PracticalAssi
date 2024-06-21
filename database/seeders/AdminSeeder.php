<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Gustavs Garde',
                'email' => 'gustavsgarde1022@gmail.com',
                'password' => Hash::make('yourpassword'),
                'is_admin' => 1,
            ],
            [
                'name' => 'Marcis Darguzs',
                'email' => 'marcis.darguzs9@gmail.com',
                'password' => Hash::make('yourpassword'),
                'is_admin' => 1,
            ],
        ]);
    }
}


