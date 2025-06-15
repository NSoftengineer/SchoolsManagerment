<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'province_id',
        'name_la',
        'name_en',
        'taget',
    ];


    public function villages()
    {
        return $this->hasMany(Village::class, 'id', 'district_id');
    }
}
