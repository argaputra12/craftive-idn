<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'ticket_buyer_id',
        'ticket_id',
        'payment_method_id',
        'amount',
        'unique_code',
        'total_price',
        'is_paid',
        'paid_at',
        'proof_of_payment'
    ];
}