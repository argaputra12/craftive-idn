<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventOrganizer extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'nik',
        'address',
        'city',
        'ktp',
        'phone_number',
        'photo',
        'instagram',
        'facebook',
        'twitter',
    ];

    // relationships
    public function event()
    {
        return $this->hasMany(Event::class);
    }
}