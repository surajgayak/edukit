<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['filename'];


    public function getImagePathAttribute()
    {
        if ($this->filename == null)
            return "";
        return asset("media/image/" . $this->filename);
    }
}
