<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'introduction',
        'description',
        'benefit',
        'description',
        'image',
        'duration'
    ];

    public function syllabuses()
    {
        return $this->hasMany(Syllabus::class);
    }
    public function upcommingclasses()
    {
        return $this->hasMany(Upcommingclass::class);
    }
}
