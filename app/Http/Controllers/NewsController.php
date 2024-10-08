<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['news' => News::orderBy('date', 'desc')->paginate(15)]);
    }

    public function show(News $news)
    {
        return view('news.show', ['news' => $news]);
    }
}
