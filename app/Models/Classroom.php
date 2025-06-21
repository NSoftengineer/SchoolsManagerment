<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'floorstudies_id',
        'name',
    ];

    public function floorstudy()
    {
        return $this->hasOne(Floorstudy::class, 'id', 'floorstudies_id');
    }

    public function countstudent()
    {
        return $this->hasMany(StudentClass::class, 'classrooms_id', 'id')->where('status', '1');
    }

    protected $appends = ['student_count'];
    public function getStudentCountAttribute()
    {
        return $this->countstudent()->count();
    }
}
