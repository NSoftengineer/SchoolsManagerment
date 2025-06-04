<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name_la',
        'name_en',
        'taget',
    ];


    public function districts()
    {
        return $this->hasMany(District::class, 'id', 'province_id')->with('viilages');
    }
}
