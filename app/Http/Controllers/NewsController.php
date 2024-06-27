<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::with('comments.replies')->findOrFail($id);
        return view('news.show', compact('newsItem'));
    }
}




