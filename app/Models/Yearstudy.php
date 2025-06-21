<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yearstudy extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'year_start',
        'year_end',
    ];
}
