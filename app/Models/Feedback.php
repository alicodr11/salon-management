<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'name',
        'email',
        'service',
        'rating',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'integer',
        ];
    }
}

