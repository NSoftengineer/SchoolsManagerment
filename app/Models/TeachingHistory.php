<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeachingHistory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'employee_id',
        'teaching_room',
        'teaching',
        'teaching_years',
        'teaching_at',
    ];

    public function teachingRoom()
    {
        return $this->hasOne(Classroom::class, 'id', 'teaching_room');
    }
    public function yearstudy()
    {
        return $this->belongsTo(Yearstudy::class, 'teaching_years');
    }
}
