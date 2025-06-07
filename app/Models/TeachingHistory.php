<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeachingHistory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'teaching_room',
        'teaching',
        'teaching_years',
        'teaching_at',
    ];
}
