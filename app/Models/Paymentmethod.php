<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentmethod extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'logo',
        'image'
    ];

    public function getadmissions()
    {
        return $this->hasMany(Admission::class);
    }
}
