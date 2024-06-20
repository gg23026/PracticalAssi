<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turnirs;

class TurnirsController extends Controller
{
    public function index(Request $request)
    {
        $query = Turnirs::query();

        if ($request->filled('date_from')) {
            $query->where('Datums', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('Datums', '<=', $request->date_to);
        }

        if ($request->filled('valsts')) {
            $query->where('Valsts', 'like', '%' . $request->valsts . '%');
        }

        $turniri = $query->get();

        return view('turniri.index', compact('turniri'));
    }
}



