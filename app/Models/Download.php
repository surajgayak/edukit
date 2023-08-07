<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'category',
        'title',
        'slug',
        'detail',
        'file',
    ];

    public function getFilePathAttribute()
    {
        return url("/storage/" . $this->file);
    }

}
