<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;
    protected $table = "syllabuses";
    protected $fillable = [
        'title',
        'description',
        'image',
        'course_id'
    ];
    public function suraj()
    {
        return  $this->belongsTo(Course::class, 'course_id');
    }
}
