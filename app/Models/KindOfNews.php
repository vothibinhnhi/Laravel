<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfNews extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id'
    ];

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    function news()
    {
        return $this->hasMany(News::class);
    }
}
