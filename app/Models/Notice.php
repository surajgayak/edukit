<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'tag',
        'image',
        'category_id',
        'highlights',
        'priority'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
