<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expenses extends Model
{
    use SoftDeletes;
    protected $table = 'expenses';
    protected $fillable = [
        'name',
        'description',
        'date_at',
        'typeexpenses_id',
        'amount',
        'price',
        'status',
        'user_id',
    ];

    public function typeExpenses()
    {
        return $this->belongsTo(Typeexpenses::class, 'typeexpenses_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
