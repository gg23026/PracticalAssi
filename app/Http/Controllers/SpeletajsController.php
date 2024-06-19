<?php

namespace App\Http\Controllers;

use App\Models\Speletajs;
use Illuminate\Http\Request;

class SpeletajsController extends Controller
{
    public function index()
    {
        $speletaji = Speletajs::all();
        return view('speletaji.index', compact('speletaji'));
    }
}


