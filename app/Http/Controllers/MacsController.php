<?php

namespace App\Http\Controllers;

use App\Models\Macs;
use Illuminate\Http\Request;

class MacsController extends Controller
{
    public function index()
    {
        $maci = Macs::all();
        return view('maci.index', compact('maci'));
    }
}


