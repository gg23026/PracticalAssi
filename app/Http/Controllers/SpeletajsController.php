<?php
namespace App\Http\Controllers;

use App\Models\Speletajs;
use Illuminate\Http\Request;

class SpeletajsController extends Controller
{
    public function index(Request $request)
    {
        $speletaji = Speletajs::query();

        // Filtrēšana pēc komandas ID
        if ($request->has('team_id') && $request->team_id != null) {
            $speletaji->where('KomandasID', $request->team_id);
        }

        // Filtrēšana pēc minimālā ranga
        if ($request->has('rank_min') && $request->rank_min != null) {
            $speletaji->where('Rangs', '>=', $request->rank_min);
        }

        // Filtrēšana pēc maksimālā ranga
        if ($request->has('rank_max') && $request->rank_max != null) {
            $speletaji->where('Rangs', '<=', $request->rank_max);
        }

        return view('speletaji.index', [
            'speletaji' => $speletaji->get(),
        ]);
    }

    public function show($id)
{
    $speletajs = Speletajs::findOrFail($id);
    return view('speletaji.show', compact('speletajs'));
}
}


