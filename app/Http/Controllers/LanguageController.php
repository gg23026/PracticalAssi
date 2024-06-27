<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $request->validate(['locale' => 'required|in:en,lv']);
        Session::put('locale', $request->locale);
        return response()->json(['success' => true]);
    }
}
