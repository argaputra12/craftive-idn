<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // fillable data
    protected $fillable = [
        'user_id',
        'ticket_buyer_id',
        'ticket_id',
        'quantity',
        'price',
        'total_price',
        'status',
        'invoice_url',
        'external_id',
        'paid_at',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function ticketBuyer()
    {
        return $this->belongsTo(TicketBuyer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
