<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getadmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'academic_level',
        'college',
        'payment_image',
        'payment_amount',
        'status',
        'upcommingclasses_id',
        'paymentmethod_id'
    ];

    public function paymentmethods()
    {
        return $this->belongsTo(PaymentMethod::class, 'paymentmethod_id');
    }
    public function upcommingclasses()
    {
        return $this->belongsTo(Upcommingclass::class, 'upcommingclasses_id');
    }
}
