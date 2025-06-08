<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    protected $fillable = [
        'userid',
        'tuition_id',
        'items_id',
        'items_title',
        'amount',
        'amount_per_unit',
        'total_amout',
        'type',
    ];
}
