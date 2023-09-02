<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'event_id',
        'category_id'
    ];

    public function events()
    {
        return $this->belongsTo(Event::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}