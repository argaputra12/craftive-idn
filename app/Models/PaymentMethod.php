<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'name',
        'description',
        'payment_number'
    ];

    public function bill()
    {
        return $this->hasMany(Bill::class);
    }

}