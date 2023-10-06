<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'name',
        'image_url'
    ];

    // relationships
    public function eventCategory()
    {
        return $this->hasMany(EventCategory::class);
    }
}