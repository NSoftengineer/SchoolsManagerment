<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeachingCurrent extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'employee_id',
        'position',
        'salary',
        'date_start',
        'date_end',
    ];
}
