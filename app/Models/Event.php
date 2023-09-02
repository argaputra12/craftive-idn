<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'name',
        'description',
        'date',
        'location',
        'city',
        'province',
    ];

    // relationships
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function eventCategory()
    {
        return $this->hasMany(EventCategory::class);
    }
}
