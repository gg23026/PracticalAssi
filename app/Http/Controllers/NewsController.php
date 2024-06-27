<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function show($id)
    {
        $newsItem = News::with('comments.replies')->findOrFail($id);
        return view('news.show', compact('newsItem'));
    }

    public function latestNews()
    {
        $news = News::latest()->get();
        return view('news.latest', compact('news'));
    }
}



