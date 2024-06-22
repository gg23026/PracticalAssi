<?php

namespace App\Http\Controllers;

use App\Models\Komanda;
use Illuminate\Http\Request;

class KomandaController extends Controller
{
    public function index(Request $request)
    {
        $komandas = Komanda::query();

        // Filtrēšana pēc valsts
        if ($request->has('country') && $request->country != null) {
            $komandas->where('Valsts', 'like', '%' . $request->country . '%');
        }

        // Filtrēšana pēc minimālā ranga
        if ($request->has('rank_min') && $request->rank_min != null) {
            $komandas->where('Rangs', '>=', $request->rank_min);
        }

        // Filtrēšana pēc maksimālā ranga
        if ($request->has('rank_max') && $request->rank_max != null) {
            $komandas->where('Rangs', '<=', $request->rank_max);
        }

        return view('komandas.index', [
            'komandas' => $komandas->get(),
        ]);
    }

    public function show($id)
    {
        $komanda = Komanda::findOrFail($id);
        return view('komandas.show', compact('komanda'));
    }
}



