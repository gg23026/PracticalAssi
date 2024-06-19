<?php

namespace App\Http\Controllers;

use App\Models\Turnirs;
use Illuminate\Http\Request;

class TurnirsController extends Controller
{
    public function index()
    {
        $turniri = Turnirs::all();
        return view('turniri.index', compact('turniri'));
    }
}


