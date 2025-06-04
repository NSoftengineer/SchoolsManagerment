<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Itemforregister extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'groupitems_id',
        'name',
        'price',
        'default',
        'type_items',
    ];
}
