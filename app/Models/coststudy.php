<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class coststudy extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'classrooms_id',
        'yearstudies_id',
        'groupitems_id',
        'price',
        'type_payment',
    ];
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classrooms_id');
    }
    public function yearstudy()
    {
        return $this->belongsTo(Yearstudy::class, 'yearstudies_id');
    }
    public function groupitem()
    {
        return $this->belongsTo(Groupitem::class, 'groupitems_id');
    }
    protected $appends = [
        'type_payment_label',
        'type_payment_class',
        'type_payment_icon',
    ];
    // public function getTypePaymentAttribute($value)
    // {
    //     return $value == 1 ? 'Cash' : 'Credit';
    // }
    // public function setTypePaymentAttribute($value)
    // {
    //     $this->attributes['type_payment'] = $value == 'Cash' ? 1 : 2;
    // }
    public function getTypePaymentLabelAttribute()
    {
        // return $this->type_payment == 1 ? 'Cash' : 'Credit';
        return $this->type_payment == 0 ? 'ເປັນເດືອນ' : ($this->type_payment == 1 ? 'ເປັນພາກຮຽນ' : 'ເປັນເດືອນ ແລະ ເປັນພາກຮຽນ');
    }
    public function getTypePaymentClassAttribute()
    {
        return $this->type_payment == 1 ? 'badge badge-success' : 'badge badge-warning';
    }
    public function getTypePaymentIconAttribute()
    {
        return $this->type_payment == 1 ? 'fa-solid fa-money-bill' : 'fa-solid fa-credit-card';
    }
}
