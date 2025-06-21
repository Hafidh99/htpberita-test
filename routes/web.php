<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;




Route::get('/', [LandingController::class, 'index'])->name('landing'); 
Route::get('/semua-berita', [NewsController::class, 'allNews'])->name('news.all');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/{slug}', [NewsController::class, 'category'])->name('news.category');



// Route::get('/news/{id}', [LandingController::class, 'show'])->name('news.show');

// Route::get('/', [LandingController::class, 'index'])
//     ->name('landing');

// Route::get('/dummy-test/{id}', function ($id) {
//     $news = \App\Models\News::findOrFail($id);
//     return view('dummy.test', compact('news'));
// })->name('dummy.test');