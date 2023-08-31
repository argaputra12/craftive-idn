<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketBuyer extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'city',
    ];

    // relationships
    public function bill()
    {
        return $this->hasMany(Bill::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}