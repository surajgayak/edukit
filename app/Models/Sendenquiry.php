<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sendenquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact',
        'course',
        'college',
        'message',

    ];
}
