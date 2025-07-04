<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth; // <-- PASTIKAN USE INI ADA

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'view',
        'author_id',        // Cukup satu kali
        'news_category_id', // Cukup satu kali
    ];

    // ===================================================================
    // BAGIAN TERPENTING YANG HILANG ADA DI SINI
    // ===================================================================
    protected static function booted(): void
    {
        // Method ini akan berjalan otomatis SETIAP KALI record News BARU dibuat
        static::creating(function (News $news) {
            // Cek apakah ada user yang login
            if (Auth::check()) {
                // Isi author_id dan news_category_id secara otomatis
                $news->author_id = Auth::id();
                $news->news_category_id = Auth::user()->news_category_id;
            }
        });
    }
    // ===================================================================


    public function author()
    {
        // Pastikan model Author Anda ada di App\Models\Author
        return $this->belongsTo(Author::class);
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}