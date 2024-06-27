<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komanda;
use App\Models\Speletajs;
use App\Models\Turnirs;
use App\Models\Macs;
use App\Models\Speles;
use App\Models\Statistika;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('home');
    }

    public function indexKomandas()
    {
        $komandas = Komanda::all();
        return view('komandas', compact('komandas'));
    }

    public function indexSpeletaji()
    {
        $speletaji = Speletajs::all();
        return view('speletaji', compact('speletaji'));
    }

    public function indexTurniri()
    {
        $turniri = Turnirs::all();
        return view('turniri', compact('turniri'));
    }

    public function indexMaci()
    {
        $maci = Macs::all();
        return view('maci', compact('maci'));
    }

    public function indexSpeles()
    {
        $speles = Speles::all();
        return view('speles', compact('speles'));
    }

    public function indexStatistika()
    {
        $statistika = Statistika::all();
        return view('statistika', compact('statistika'));
    }
    
}









