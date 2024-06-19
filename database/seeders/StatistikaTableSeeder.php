<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatistikaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('statistika')->insert([
            ['StatistikasID' => 1, 'SpeletajsID' => 3, 'KomandasID' => 1, 'Uzvaras' => 6, 'Zaudejumi' => 1],
            ['StatistikasID' => 2, 'SpeletajsID' => 7, 'KomandasID' => 2, 'Uzvaras' => 0, 'Zaudejumi' => 3],
            ['StatistikasID' => 3, 'SpeletajsID' => 21, 'KomandasID' => 3, 'Uzvaras' => 1, 'Zaudejumi' => 1],
            ['StatistikasID' => 4, 'SpeletajsID' => 8, 'KomandasID' => 4, 'Uzvaras' => 0, 'Zaudejumi' => 2],
            ['StatistikasID' => 5, 'SpeletajsID' => 2, 'KomandasID' => 5, 'Uzvaras' => 1, 'Zaudejumi' => 2],
            ['StatistikasID' => 6, 'SpeletajsID' => 1, 'KomandasID' => 6, 'Uzvaras' => 0, 'Zaudejumi' => 2],
            ['StatistikasID' => 7, 'SpeletajsID' => 19, 'KomandasID' => 7, 'Uzvaras' => 4, 'Zaudejumi' => 0],
            ['StatistikasID' => 8, 'SpeletajsID' => 9, 'KomandasID' => 8, 'Uzvaras' => 1, 'Zaudejumi' => 0],
            ['StatistikasID' => 9, 'SpeletajsID' => 22, 'KomandasID' => 9, 'Uzvaras' => 1, 'Zaudejumi' => 1],
            ['StatistikasID' => 10, 'SpeletajsID' => 14, 'KomandasID' => 10, 'Uzvaras' => 2, 'Zaudejumi' => 0],
            ['StatistikasID' => 11, 'SpeletajsID' => 6, 'KomandasID' => 11, 'Uzvaras' => 2, 'Zaudejumi' => 0],
            ['StatistikasID' => 12, 'SpeletajsID' => 23, 'KomandasID' => 12, 'Uzvaras' => 1, 'Zaudejumi' => 2],
            ['StatistikasID' => 13, 'SpeletajsID' => 23, 'KomandasID' => 13, 'Uzvaras' => 1, 'Zaudejumi' => 0],
            ['StatistikasID' => 14, 'SpeletajsID' => 14, 'KomandasID' => 14, 'Uzvaras' => 0, 'Zaudejumi' => 0],
            ['StatistikasID' => 15, 'SpeletajsID' => 15, 'KomandasID' => 15, 'Uzvaras' => 1, 'Zaudejumi' => 2],
            ['StatistikasID' => 16, 'SpeletajsID' => 16, 'KomandasID' => 16, 'Uzvaras' => 0, 'Zaudejumi' => 1],
            ['StatistikasID' => 17, 'SpeletajsID' => 17, 'KomandasID' => 17, 'Uzvaras' => 2, 'Zaudejumi' => 1],
            ['StatistikasID' => 18, 'SpeletajsID' => 18, 'KomandasID' => 18, 'Uzvaras' => 1, 'Zaudejumi' => 0],
            ['StatistikasID' => 19, 'SpeletajsID' => 19, 'KomandasID' => 19, 'Uzvaras' => 1, 'Zaudejumi' => 0],
            ['StatistikasID' => 20, 'SpeletajsID' => 18, 'KomandasID' => 20, 'Uzvaras' => 0, 'Zaudejumi' => 2],
            ['StatistikasID' => 21, 'SpeletajsID' => 21, 'KomandasID' => 21, 'Uzvaras' => 1, 'Zaudejumi' => 2],
        ]);
    }
}

