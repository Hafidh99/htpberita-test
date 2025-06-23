<?php
namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Banner;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        $news->increment('views'); 
        $newestNews = News::orderBy('created_at', 'desc')->take(4)->get();

        return view('pages.show', compact('news', 'newestNews'));
    }   

    public function category($slug)
    {
        $category = NewsCategory::where('slug', $slug)->firstOrFail();

        return view('pages.category', compact('category'));
    }

    public function allNews()
    {
        $allNews = News::with('newsCategory')->latest()->paginate(10);


        return view('pages.semua-berita', compact('allNews'));
    }
}