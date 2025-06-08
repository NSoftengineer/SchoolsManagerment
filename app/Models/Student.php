<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'ethnic',
        'village_id',
        'district_id',
        'province_id',
        'mother',
        'm_phone',
        'm_occupation',
        'father',
        'f_phone',
        'f_occupation',
    ];

    public function studentclass()
    {
        return $this->hasOne(StudentClass::class, 'student_id', 'id')->with(['classroom', 'studycost']);
    }
}
