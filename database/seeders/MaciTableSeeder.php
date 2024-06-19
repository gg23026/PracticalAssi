<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaciTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('maci')->insert([
            ['MacaID' => 1, 'TurniraID' => 1, 'Komanda1ID' => 1, 'Komanda2ID' => 2, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 2, 'TurniraID' => 1, 'Komanda1ID' => 5, 'Komanda2ID' => 7, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 3, 'TurniraID' => 1, 'Komanda1ID' => 3, 'Komanda2ID' => 4, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 4, 'TurniraID' => 1, 'Komanda1ID' => 2, 'Komanda2ID' => 7, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 5, 'TurniraID' => 1, 'Komanda1ID' => 1, 'Komanda2ID' => 3, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 6, 'TurniraID' => 1, 'Komanda1ID' => 15, 'Komanda2ID' => 12, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 7, 'TurniraID' => 1, 'Komanda1ID' => 17, 'Komanda2ID' => 29, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 8, 'TurniraID' => 1, 'Komanda1ID' => 12, 'Komanda2ID' => 17, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 9, 'TurniraID' => 1, 'Komanda1ID' => 7, 'Komanda2ID' => 1, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 10, 'TurniraID' => 2, 'Komanda1ID' => 22, 'Komanda2ID' => 23, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 11, 'TurniraID' => 2, 'Komanda1ID' => 21, 'Komanda2ID' => 12, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 12, 'TurniraID' => 2, 'Komanda1ID' => 16, 'Komanda2ID' => 30, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 13, 'TurniraID' => 2, 'Komanda1ID' => 19, 'Komanda2ID' => 20, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 14, 'TurniraID' => 3, 'Komanda1ID' => 27, 'Komanda2ID' => 24, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 15, 'TurniraID' => 3, 'Komanda1ID' => 11, 'Komanda2ID' => 25, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 16, 'TurniraID' => 4, 'Komanda1ID' => 6, 'Komanda2ID' => 5, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 17, 'TurniraID' => 5, 'Komanda1ID' => 18, 'Komanda2ID' => 28, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 18, 'TurniraID' => 6, 'Komanda1ID' => 26, 'Komanda2ID' => 9, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 19, 'TurniraID' => 7, 'Komanda1ID' => 8, 'Komanda2ID' => 9, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 20, 'TurniraID' => 7, 'Komanda1ID' => 20, 'Komanda2ID' => 1, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 21, 'TurniraID' => 7, 'Komanda1ID' => 1, 'Komanda2ID' => 2, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 22, 'TurniraID' => 8, 'Komanda1ID' => 1, 'Komanda2ID' => 4, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 23, 'TurniraID' => 9, 'Komanda1ID' => 1, 'Komanda2ID' => 5, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 24, 'TurniraID' => 9, 'Komanda1ID' => 21, 'Komanda2ID' => 29, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 25, 'TurniraID' => 9, 'Komanda1ID' => 27, 'Komanda2ID' => 30, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 26, 'TurniraID' => 10, 'Komanda1ID' => 15, 'Komanda2ID' => 13, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 27, 'TurniraID' => 11, 'Komanda1ID' => 11, 'Komanda2ID' => 23, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 28, 'TurniraID' => 5, 'Komanda1ID' => 7, 'Komanda2ID' => 6, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 29, 'TurniraID' => 5, 'Komanda1ID' => 17, 'Komanda2ID' => 15, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 30, 'TurniraID' => 9, 'Komanda1ID' => 20, 'Komanda2ID' => 10, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 31, 'TurniraID' => 9, 'Komanda1ID' => 27, 'Komanda2ID' => 30, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 32, 'TurniraID' => 10, 'Komanda1ID' => 15, 'Komanda2ID' => 13, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 33, 'TurniraID' => 11, 'Komanda1ID' => 11, 'Komanda2ID' => 23, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 34, 'TurniraID' => 5, 'Komanda1ID' => 7, 'Komanda2ID' => 6, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 35, 'TurniraID' => 5, 'Komanda1ID' => 17, 'Komanda2ID' => 15, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 36, 'TurniraID' => 9, 'Komanda1ID' => 21, 'Komanda2ID' => 29, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 37, 'TurniraID' => 9, 'Komanda1ID' => 27, 'Komanda2ID' => 30, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 38, 'TurniraID' => 10, 'Komanda1ID' => 15, 'Komanda2ID' => 13, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 39, 'TurniraID' => 11, 'Komanda1ID' => 11, 'Komanda2ID' => 23, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 40, 'TurniraID' => 5, 'Komanda1ID' => 7, 'Komanda2ID' => 6, 'Rezultats' => 'Uzvara'],
            ['MacaID' => 41, 'TurniraID' => 5, 'Komanda1ID' => 17, 'Komanda2ID' => 15, 'Rezultats' => 'Zaudejums'],
            ['MacaID' => 42, 'TurniraID' => 6, 'Komanda1ID' => 27, 'Komanda2ID' => 21, 'Rezultats' => 'Uzvara'],
        ]);
    }
}
