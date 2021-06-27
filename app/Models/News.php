<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'content',
        'thumbnail',
        'kindofnews_id',
        'user_id'
    ];

    function kindOfNews()
    {
        return $this->belongsTo(KindOfNews::class, 'kindofnews_id');
    }
    function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
