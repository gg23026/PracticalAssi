<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurniriTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('turniri')->insert([
            ['TurniraID' => 1, 'Nosaukums' => 'IEM Katowice 2024', 'Datums' => '2024-01-31', 'AtrašanasVieta' => 'Katowice, Poland'],
            ['TurniraID' => 2, 'Nosaukums' => 'PGL CS2 Major Copenhagen 2024', 'Datums' => '2024-03-21', 'AtrašanasVieta' => 'Copenhagen, Denmark'],
            ['TurniraID' => 3, 'Nosaukums' => 'IEM Chengdu 2024', 'Datums' => '2024-04-08', 'AtrašanasVieta' => 'Chengdu, China'],
            ['TurniraID' => 4, 'Nosaukums' => 'ESL Pro League Season 19', 'Datums' => '2024-04-23', 'AtrašanasVieta' => 'Valletta, Malta'],
            ['TurniraID' => 5, 'Nosaukums' => 'BLAST Premier Spring Groups 2024', 'Datums' => '2024-01-22', 'AtrašanasVieta' => 'Copenhagen, Denmark'],
            ['TurniraID' => 6, 'Nosaukums' => 'BLAST Premier World Final 2023', 'Datums' => '2023-12-13', 'AtrašanasVieta' => 'Abu Dhabi, UAE'],
            ['TurniraID' => 7, 'Nosaukums' => 'ESL Challenger Jönköping 2023', 'Datums' => '2023-11-24', 'AtrašanasVieta' => 'Jönköping, Sweden'],
            ['TurniraID' => 8, 'Nosaukums' => 'BLAST Premier Fall Final 2023', 'Datums' => '2023-11-22', 'AtrašanasVieta' => 'Copenhagen, Denmark'],
            ['TurniraID' => 9, 'Nosaukums' => 'CS Asia Championships 2023', 'Datums' => '2023-11-08', 'AtrašanasVieta' => 'Shanghai, China'],
            ['TurniraID' => 10, 'Nosaukums' => 'IEM Sydney 2023', 'Datums' => '2023-10-16', 'AtrašanasVieta' => 'Sydney, Australia'],
            ['TurniraID' => 11, 'Nosaukums' => 'ESL Pro League Season 18', 'Datums' => '2023-08-30', 'AtrašanasVieta' => 'Valletta, Malta'],
            ['TurniraID' => 12, 'Nosaukums' => 'IEM Cologne 2023', 'Datums' => '2023-07-29', 'AtrašanasVieta' => 'Cologne, Germany'],
            ['TurniraID' => 13, 'Nosaukums' => 'BLAST Premier Fall Groups 2023', 'Datums' => '2023-07-13', 'AtrašanasVieta' => 'Copenhagen, Denmark'],
            ['TurniraID' => 14, 'Nosaukums' => 'BLAST Premier Spring Final 2023', 'Datums' => '2023-06-07', 'AtrašanasVieta' => 'Washington, D.C., US'],
            ['TurniraID' => 15, 'Nosaukums' => 'IEM Dallas 2023', 'Datums' => '2023-05-29', 'AtrašanasVieta' => 'Dallas, TX, US'],
            ['TurniraID' => 16, 'Nosaukums' => 'BLAST.tv Paris Major 2023 Challengers Stage', 'Datums' => '2023-05-08', 'AtrašanasVieta' => 'Paris, France'],
            ['TurniraID' => 17, 'Nosaukums' => 'BLAST.tv Paris Major 2023', 'Datums' => '2023-05-13', 'AtrašanasVieta' => 'Paris, France'],
            ['TurniraID' => 18, 'Nosaukums' => 'IEM Rio 2023', 'Datums' => '2023-04-17', 'AtrašanasVieta' => 'Rio de Janeiro, Brazil'],
            ['TurniraID' => 19, 'Nosaukums' => 'ESL Pro League Season 17', 'Datums' => '2023-02-22', 'AtrašanasVieta' => 'Valletta, Malta'],
            ['TurniraID' => 20, 'Nosaukums' => 'IEM Katowice 2023', 'Datums' => '2023-02-04', 'AtrašanasVieta' => 'Katowice, Poland'],
            ['TurniraID' => 21, 'Nosaukums' => 'IEM Katowice 2023 Play-in', 'Datums' => '2023-02-01', 'AtrašanasVieta' => 'Katowice, Poland'],
            ['TurniraID' => 22, 'Nosaukums' => 'BLAST Premier Spring Groups 2023', 'Datums' => '2023-01-19', 'AtrašanasVieta' => 'Copenhagen, Denmark'],
            ['TurniraID' => 23, 'Nosaukums' => 'BLAST Premier World Final 2022', 'Datums' => '2022-12-14', 'AtrašanasVieta' => 'Abu Dhabi, UAE'],
            ['TurniraID' => 24, 'Nosaukums' => 'BLAST Premier Fall Final 2022', 'Datums' => '2022-11-23', 'AtrašanasVieta' => 'Copenhagen, Denmark'],
            ['TurniraID' => 25, 'Nosaukums' => 'IEM Rio Major 2022', 'Datums' => '2022-11-05', 'AtrašanasVieta' => 'Rio de Janeiro, Brazil'],
            ['TurniraID' => 26, 'Nosaukums' => 'IEM Rio Major 2022 Challengers Stage', 'Datums' => '2022-10-31', 'AtrašanasVieta' => 'Rio de Janeiro, Brazil'],
            ['TurniraID' => 27, 'Nosaukums' => 'ESL Pro League Season 16', 'Datums' => '2022-08-31', 'AtrašanasVieta' => 'Valletta, Malta'],
            ['TurniraID' => 28, 'Nosaukums' => 'IEM Dallas 2024', 'Datums' => '2024-05-27', 'AtrašanasVieta' => 'Dallas, TX, US'],
            ['TurniraID' => 29, 'Nosaukums' => 'BLAST Premier Spring Final 2024', 'Datums' => '2024-06-12', 'AtrašanasVieta' => 'London, United Kingdom'],
            ['TurniraID' => 30, 'Nosaukums' => 'Esports World Cup 2024', 'Datums' => '2024-07-17', 'AtrašanasVieta' => 'Riyadh, Saudi Arabia'],
        ]);
    }
}
