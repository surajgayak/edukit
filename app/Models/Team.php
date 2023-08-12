<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        "category",
        'sorting',
        'status',
        "position",
        'slug',
        'representation',
        'detail',
        'photo',
        'facebook_link',
        'twitter_link',
        'linkedin_link'
    ];

    // public function getPhotoPathAttribute()
    // {
    //     return url("/storage/" . $this->photo);
    // }

    // public function getLinkAttribute()
    // {
    //     return url("/member/" . $this->slug);
    // }
}
