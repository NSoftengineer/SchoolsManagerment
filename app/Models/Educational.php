<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Educational extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'education_level',
        'institution_name',
        'country',
        'years',
        'details',
    ];
}
