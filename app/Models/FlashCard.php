<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlashCard extends Model
{
    protected $fillable = [
        'german',
        'english',
        'category',
        'level',
    ];
}
