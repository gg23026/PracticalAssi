<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Macs;
use App\Models\Komanda;

class MacsController extends Controller
{
    public function index(Request $request)
    {
        $query = Macs::query();

        if ($request->filled('komanda')) {
            $komanda = $request->komanda;
            $query->whereHas('komanda1', function ($q) use ($komanda) {
                $q->where('Nosaukums', 'like', '%' . $komanda . '%');
            })->orWhereHas('komanda2', function ($q) use ($komanda) {
                $q->where('Nosaukums', 'like', '%' . $komanda . '%');
            });
        }

        $maci = $query->get();

        return view('maci.index', compact('maci'));
    }
}



