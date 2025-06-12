<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachingCurrent extends Model
{
    protected $fillable = [
        'employee_id',
        'position',
        'salary',
        'date_start',
        'date_end',
    ];
}
