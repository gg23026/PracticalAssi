<?php

namespace App\Http\Controllers;

use App\Models\Statistika;
use Illuminate\Http\Request;

class StatistikaController extends Controller
{
    public function index()
    {
        $statistika = Statistika::all();
        return view('statistika.index', compact('statistika'));
    }
}


