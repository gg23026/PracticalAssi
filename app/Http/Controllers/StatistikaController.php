<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistika;
use App\Models\Komanda;

class StatistikaController extends Controller
{
    public function index(Request $request)
    {
        $query = Statistika::query();

        if ($request->filled('uzvaras_vairak')) {
            $query->where('Uzvaras', '>', $request->uzvaras_vairak);
        }

        if ($request->filled('uzvaras_mazak')) {
            $query->where('Uzvaras', '<', $request->uzvaras_mazak);
        }

        if ($request->filled('zaudejumi_vairak')) {
            $query->where('Zaudejumi', '>', $request->zaudejumi_vairak);
        }

        if ($request->filled('zaudejumi_mazak')) {
            $query->where('Zaudejumi', '<', $request->zaudejumi_mazak);
        }

        if ($request->filled('komanda')) {
            $komanda = $request->komanda;
            $query->whereHas('komanda', function($q) use ($komanda) {
                $q->where('Nosaukums', 'like', '%' . $komanda . '%');
            });
        }

        $statistika = $query->get();

        return view('statistika.index', compact('statistika'));
    }
}





