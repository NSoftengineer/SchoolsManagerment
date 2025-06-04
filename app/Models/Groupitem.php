<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Groupitem extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];

    public function items()
    {
        return $this->hasMany(Itemforregister::class, 'groupitems_id');
    }


    protected $appends = ['items_count', 'items_sum_price'];
    public function getItemsCountAttribute()
    {
        return $this->items()->count();
    }
    public function getItemsSumPriceAttribute()
    {
        return $this->items()->sum('price');
    }
}
