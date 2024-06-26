<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            KomandasTableSeeder::class,
            SpeletajiTableSeeder::class,
            TurniriTableSeeder::class,
            MaciTableSeeder::class,
            SpelesTableSeeder::class,
            StatistikaTableSeeder::class,
            AdminSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
    }

}