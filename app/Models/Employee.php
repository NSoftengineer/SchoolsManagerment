<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'full_name',
        'birthday',
        'single',
        'ethnic',
        'phones',
        'weight',
        'height',
        'clothes_size',
        'province',
        'district',
        'village',
        'active',
        'img',
    ];
}
