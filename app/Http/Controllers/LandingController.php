<?php
namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Banner;
use App\Models\Slideshow;

class LandingController extends Controller
{
    public function show($id)
    {
        $news = News::findOrFail($id);
        $news->increment('views');
        return view('news.show', compact('news'));
    }   

    public function index()
    {
        $banners = Banner::all();
        $featuredNews = News::orderBy('views', 'desc')->take(5)->get();
        $latestNews  = News::with(['newsCategory', 'author'])->orderBy('created_at', 'desc')->take(4)->get();
        $slideshows = Slideshow::with('news')->orderBy('created_at', 'desc')->take(5)->get();


        return view('pages.landing', compact('banners', 'featuredNews', 'latestNews','slideshows'));
    }
}