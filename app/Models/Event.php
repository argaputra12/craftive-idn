<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'event_organizer_id',
        'name',
        'description',
        'date',
        'location',
        'city',
        'province',
    ];

    // relationships
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function eventTag()
    {
        return $this->hasMany(EventTag::class);
    }

    public function eventCategory()
    {
        return $this->hasMany(EventCategory::class);
    }
}