<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Educational extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'employee_id',
        'education_level',
        'institution_name',
        'country',
        'years',
        'details',
    ];

    public function yearstudy()
    {
        return $this->belongsTo(Yearstudy::class, 'years');
    }
    public function floor()
    {
        return $this->belongsTo(Floorstudy::class, 'education_level');
    }
}
