<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $casts = [
        'details' => 'array',
    ];

    protected $fillable = [
        'details',
    ];
}

