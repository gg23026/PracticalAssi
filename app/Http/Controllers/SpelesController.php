<?php

namespace App\Http\Controllers;

use App\Models\Speles;
use Illuminate\Http\Request;

class SpelesController extends Controller
{
    public function index()
    {
        $speles = Speles::with('speletajs')->get();
        return view('speles.index', compact('speles'));
    }
}


