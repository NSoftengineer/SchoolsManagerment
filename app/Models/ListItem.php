<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListItem extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'invoice',
        'userid',
        'tuition_id',
        'items_id',
        'items_title',
        'amount',
        'amount_per_unit',
        'total_amout',
        'type',
        'payment_of',
    ];
}
