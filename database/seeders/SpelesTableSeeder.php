<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpelesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('speles')->insert([
            ['SpelesID' => 1, 'MacaID' => 1, 'SpeletajsID' => 3, 'Elimination' => 26, 'Death' => 16],
            ['SpelesID' => 2, 'MacaID' => 2, 'SpeletajsID' => 4, 'Elimination' => 8, 'Death' => 22],
            ['SpelesID' => 3, 'MacaID' => 3, 'SpeletajsID' => 8, 'Elimination' => 11, 'Death' => 6],
            ['SpelesID' => 4, 'MacaID' => 4, 'SpeletajsID' => 2, 'Elimination' => 30, 'Death' => 4],
            ['SpelesID' => 5, 'MacaID' => 5, 'SpeletajsID' => 24, 'Elimination' => 19, 'Death' => 13],
            ['SpelesID' => 9, 'MacaID' => 9, 'SpeletajsID' => 12, 'Elimination' => 16, 'Death' => 5],
            ['SpelesID' => 13, 'MacaID' => 13, 'SpeletajsID' => 20, 'Elimination' => 21, 'Death' => 9],
            ['SpelesID' => 14, 'MacaID' => 14, 'SpeletajsID' => 27, 'Elimination' => 12, 'Death' => 8],
            ['SpelesID' => 15, 'MacaID' => 15, 'SpeletajsID' => 6, 'Elimination' => 10, 'Death' => 7],
            ['SpelesID' => 16, 'MacaID' => 16, 'SpeletajsID' => 1, 'Elimination' => 15, 'Death' => 5],
            ['SpelesID' => 18, 'MacaID' => 18, 'SpeletajsID' => 22, 'Elimination' => 18, 'Death' => 6],
            ['SpelesID' => 19, 'MacaID' => 19, 'SpeletajsID' => 9, 'Elimination' => 16, 'Death' => 9],
            ['SpelesID' => 20, 'MacaID' => 20, 'SpeletajsID' => 18, 'Elimination' => 23, 'Death' => 14],
            ['SpelesID' => 21, 'MacaID' => 21, 'SpeletajsID' => 3, 'Elimination' => 29, 'Death' => 11],
            ['SpelesID' => 22, 'MacaID' => 22, 'SpeletajsID' => 24, 'Elimination' => 28, 'Death' => 8],
            ['SpelesID' => 23, 'MacaID' => 23, 'SpeletajsID' => 10, 'Elimination' => 24, 'Death' => 17],
            ['SpelesID' => 26, 'MacaID' => 26, 'SpeletajsID' => 23, 'Elimination' => 18, 'Death' => 9],
            ['SpelesID' => 27, 'MacaID' => 27, 'SpeletajsID' => 6, 'Elimination' => 20, 'Death' => 10],
            ['SpelesID' => 28, 'MacaID' => 28, 'SpeletajsID' => 5, 'Elimination' => 15, 'Death' => 8],
            ['SpelesID' => 30, 'MacaID' => 30, 'SpeletajsID' => 20, 'Elimination' => 27, 'Death' => 6],
            ['SpelesID' => 31, 'MacaID' => 1, 'SpeletajsID' => 3, 'Elimination' => 24, 'Death' => 9],
            ['SpelesID' => 32, 'MacaID' => 3, 'SpeletajsID' => 21, 'Elimination' => 19, 'Death' => 13],
            ['SpelesID' => 33, 'MacaID' => 9, 'SpeletajsID' => 12, 'Elimination' => 17, 'Death' => 7],
            ['SpelesID' => 34, 'MacaID' => 26, 'SpeletajsID' => 23, 'Elimination' => 15, 'Death' => 11],
            ['SpelesID' => 35, 'MacaID' => 4, 'SpeletajsID' => 7, 'Elimination' => 22, 'Death' => 8],
            ['SpelesID' => 36, 'MacaID' => 16, 'SpeletajsID' => 2, 'Elimination' => 20, 'Death' => 12],
        ]);
    }
}

