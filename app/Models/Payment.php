<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'invoice',
        'userid',
        'student_id',
        'yearstudy_id',
        'classroom_id',
        'tuition_id',
        'month',
        'receive_amount',
        'return_amount',
        'over_amount',
    ];

    public function student()
    {
        return $this->hasOne(Student::class, 'id', 'student_id')->with('studentclass');
    }
    public function yearstudy()
    {
        return $this->hasOne(Yearstudy::class, 'id', 'yearstudy_id');
    }
    public function classroom()
    {
        return $this->hasOne(Classroom::class, 'id', 'classroom_id')->with('floorstudy');
    }
    public function tuitionfees()
    {
        return $this->hasOne(TuitionFees::class, 'id', 'tuition_id')->with(['items']);
    }
}
