<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachingCurrent extends Model
{
    protected $fillable = [
        'position',
        'date_start',
        'date_end',
    ];
}
