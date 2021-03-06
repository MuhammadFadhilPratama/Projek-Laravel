<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('news', [
            "title" => "News",
            "news" => Berita::all()
        ]);
    }

    public function show(Berita $news_posts)
    {
        return view('news_detil', [
            "title" => "News Detil",
            "news_detil" => $news_posts
        ]);
    }
}
