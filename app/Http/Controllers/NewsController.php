<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function latestNews()
    {
        // You can fetch latest news here if needed
        return view('news.latest');
    }
}

