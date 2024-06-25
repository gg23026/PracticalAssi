<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komanda;

class KomandaController extends Controller
{
    public function index(Request $request)
    {
        $query = Komanda::query();

        if ($request->filled('country')) {
            $query->where('Valsts', $request->country);
        }

        if ($request->filled('rank_min')) {
            $query->where('Rangs', '>=', $request->rank_min);
        }

        if ($request->filled('rank_max')) {
            $query->where('Rangs', '<=', $request->rank_max);
        }

        $komandas = $query->get();

        return view('komandas.index', compact('komandas'));
    }

    public function show($id)
    {
        $komanda = Komanda::findOrFail($id);
        return view('komandas.show', compact('komanda'));
    }
}




