<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slideshow extends Model
{

    protected $fillable = [
        'title',
        'image',
        'news_id'
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

}
