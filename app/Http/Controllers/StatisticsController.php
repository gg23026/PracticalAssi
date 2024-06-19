<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        // Example data, you can replace this with real data from your database
        $stats = [
            ['top' => 1, 'player' => 'Monesy', 'team' => 'G2', 'maps' => 34, 'rounds' => 749, 'kd_diff' => '+224', 'rating' => 1.35],
            ['top' => 15, 'player' => 'jabbi', 'team' => 'Astralis', 'maps' => 32, 'rounds' => 654, 'kd_diff' => '+64', 'rating' => 1.12],
        ];

        return view('statistics', compact('stats'));
    }
}

