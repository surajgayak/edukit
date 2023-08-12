<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "location",
        "mobile_number",
        "landline_number",
        "whatsapp_number",
        "viber_number",
        "facebook_link",
        "instagram_link",
        "twitter_link",
        "linkden_link",
        "establish_date",
        "numberof_student"
    ];
}
