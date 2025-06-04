<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable = [
        'student_id',
        'yearstudies_id',
        'classrooms_id',
        'status',
    ];
}
