<?php

namespace App\Http\Controllers;

use App\Models\Speles;
use Illuminate\Http\Request;

class SpelesController extends Controller
{
    public function index()
    {
        $speles = Speles::all();
        return view('speles.index', compact('speles'));
    }
}


