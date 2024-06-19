<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomandasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('komandas')->insert([
            ['KomandasID' => 1, 'Nosaukums' => 'FaZe', 'IzveidesDatums' => '2016-01-20', 'Valsts' => 'Europe', 'Rangs' => 1],
            ['KomandasID' => 2, 'Nosaukums' => 'Natus Vincere', 'IzveidesDatums' => '2012-11-04', 'Valsts' => 'Ukraine', 'Rangs' => 2],
            ['KomandasID' => 3, 'Nosaukums' => 'MOUZ', 'IzveidesDatums' => '2002-03-24', 'Valsts' => 'Europe', 'Rangs' => 3],
            ['KomandasID' => 4, 'Nosaukums' => 'Spirit', 'IzveidesDatums' => '2016-06-09', 'Valsts' => 'Russia', 'Rangs' => 4],
            ['KomandasID' => 5, 'Nosaukums' => 'G2', 'IzveidesDatums' => '2015-02-11', 'Valsts' => 'Europe', 'Rangs' => 5],
            ['KomandasID' => 6, 'Nosaukums' => 'Vitality', 'IzveidesDatums' => '2018-10-08', 'Valsts' => 'France', 'Rangs' => 6],
            ['KomandasID' => 7, 'Nosaukums' => 'Eternal Fire', 'IzveidesDatums' => '2021-08-13', 'Valsts' => 'Turkey', 'Rangs' => 7],
            ['KomandasID' => 8, 'Nosaukums' => 'Astralis', 'IzveidesDatums' => '2016-01-18', 'Valsts' => 'Denmark', 'Rangs' => 8],
            ['KomandasID' => 9, 'Nosaukums' => 'Virtus.pro', 'IzveidesDatums' => '2003-11-01', 'Valsts' => 'Russia', 'Rangs' => 9],
            ['KomandasID' => 10, 'Nosaukums' => 'Heroic', 'IzveidesDatums' => '2016-08-26', 'Valsts' => 'Denmark', 'Rangs' => 10],
            ['KomandasID' => 11, 'Nosaukums' => 'Falcons', 'IzveidesDatums' => '2017-12-28', 'Valsts' => 'Europe', 'Rangs' => 11],
            ['KomandasID' => 12, 'Nosaukums' => 'PaIN', 'IzveidesDatums' => '2012-12-15', 'Valsts' => 'Brazil', 'Rangs' => 12],
            ['KomandasID' => 13, 'Nosaukums' => 'Complexity', 'IzveidesDatums' => '2007-06-11', 'Valsts' => 'North America', 'Rangs' => 13],
            ['KomandasID' => 14, 'Nosaukums' => 'MIBR', 'IzveidesDatums' => '2007-09-20', 'Valsts' => 'Brazil', 'Rangs' => 14],
            ['KomandasID' => 15, 'Nosaukums' => 'ENCE', 'IzveidesDatums' => '2013-04-13', 'Valsts' => 'Finland', 'Rangs' => 15],
            ['KomandasID' => 16, 'Nosaukums' => 'Imperial', 'IzveidesDatums' => '2018-03-09', 'Valsts' => 'Brazil', 'Rangs' => 16],
            ['KomandasID' => 17, 'Nosaukums' => 'TheMongolz', 'IzveidesDatums' => '2015-07-17', 'Valsts' => 'Mongolia', 'Rangs' => 17],
            ['KomandasID' => 18, 'Nosaukums' => 'SAW', 'IzveidesDatums' => '2020-01-01', 'Valsts' => 'Portugal', 'Rangs' => 18],
            ['KomandasID' => 19, 'Nosaukums' => 'FURIA', 'IzveidesDatums' => '2017-08-10', 'Valsts' => 'Brazil', 'Rangs' => 19],
            ['KomandasID' => 20, 'Nosaukums' => 'Liquid', 'IzveidesDatums' => '2015-01-13', 'Valsts' => 'North America', 'Rangs' => 20],
            ['KomandasID' => 21, 'Nosaukums' => 'FlyQuest', 'IzveidesDatums' => '2024-03-28', 'Valsts' => 'Australia', 'Rangs' => 21],
            ['KomandasID' => 22, 'Nosaukums' => 'Gaimin Gladiators', 'IzveidesDatums' => '2019-08-22', 'Valsts' => 'Denmark', 'Rangs' => 22],
            ['KomandasID' => 23, 'Nosaukums' => 'Aurora', 'IzveidesDatums' => '2022-12-05', 'Valsts' => 'Russia', 'Rangs' => 23],
            ['KomandasID' => 24, 'Nosaukums' => 'Monte', 'IzveidesDatums' => '2022-07-26', 'Valsts' => 'Russia', 'Rangs' => 24],
            ['KomandasID' => 25, 'Nosaukums' => 'BetBoom', 'IzveidesDatums' => '2022-04-18', 'Valsts' => 'Russia', 'Rangs' => 25],
            ['KomandasID' => 26, 'Nosaukums' => 'GamerLegion', 'IzveidesDatums' => '2019-03-29', 'Valsts' => 'Germany', 'Rangs' => 26],
            ['KomandasID' => 27, 'Nosaukums' => 'Apeks', 'IzveidesDatums' => '2023-11-27', 'Valsts' => 'Norway', 'Rangs' => 27],
            ['KomandasID' => 28, 'Nosaukums' => 'BIG', 'IzveidesDatums' => '2017-01-02', 'Valsts' => 'Germany', 'Rangs' => 28],
            ['KomandasID' => 29, 'Nosaukums' => 'M80', 'IzveidesDatums' => '2023-07-15', 'Valsts' => 'North America', 'Rangs' => 29],
            ['KomandasID' => 30, 'Nosaukums' => '3DMAX', 'IzveidesDatums' => '2018-06-27', 'Valsts' => 'France', 'Rangs' => 30],
        ]);
    }
}

