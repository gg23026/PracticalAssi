<?php

namespace App\Http\Controllers;

use App\Models\Komanda;
use Illuminate\Http\Request;

class KomandaController extends Controller
{
    public function index()
    {
        $komandas = Komanda::all();
        return view('komandas.index', compact('komandas'));
    }
}


