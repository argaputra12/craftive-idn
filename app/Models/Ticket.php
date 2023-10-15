<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'event_id',
        'stock',
        'price',
        'name'
    ];

    // relationships
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}