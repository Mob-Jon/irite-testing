<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateStory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'genre',
        'story-flow'
    ];

    protected $casts = [
        'genre' => 'array'
    ];
}
