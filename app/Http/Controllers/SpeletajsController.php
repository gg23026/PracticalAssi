<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speletajs;

class SpeletajsController extends Controller
{
    public function index(Request $request)
    {
        $query = Speletajs::query();

        if ($request->filled('team_id')) {
            $query->where('KomandasID', $request->team_id);
        }

        if ($request->filled('rank_min')) {
            $query->where('Rangs', '>=', $request->rank_min);
        }

        if ($request->filled('rank_max')) {
            $query->where('Rangs', '<=', $request->rank_max);
        }

        $speletaji = $query->get();

        return view('speletaji.index', compact('speletaji'));
    }

    public function show($id)
    {
        $speletajs = Speletajs::findOrFail($id);
        return view('speletaji.show', compact('speletajs'));
    }
}



