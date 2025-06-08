<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentClass extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'student_id',
        'yearstudies_id',
        'classrooms_id',
        'status',
    ];


    public function classroom()
    {
        return $this->hasOne(Classroom::class, 'id', 'classrooms_id')->with('floorstudy');
    }
    public function studycost()
    {
        return $this->hasOne(coststudy::class, 'classrooms_id', 'classrooms_id');
    }
}
