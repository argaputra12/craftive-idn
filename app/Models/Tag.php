<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // fillable data
    protected $fillable = [
        'name',
    ];

    // relationships
    public function eventTag()
    {
        return $this->hasMany(EventTag::class);
    }
}