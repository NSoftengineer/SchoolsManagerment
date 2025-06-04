<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
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
        return $this->hasOne(StudentClass::class, 'id', 'student_id');
    }
}
