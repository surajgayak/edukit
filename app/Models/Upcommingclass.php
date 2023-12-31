<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcommingclass extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'start_time',
        'end_time',
        'course_id'
    ];

    public function courses()
    {
        return  $this->belongsTo(Course::class, "course_id");
    }
    public function getadmissions()
    {
        return  $this->hasMany(Getadmission::class);
    }
}
