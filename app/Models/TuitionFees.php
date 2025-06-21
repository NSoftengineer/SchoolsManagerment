<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TuitionFees extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'userid',
        // 'invoice',
        'student_id',
        'yearstudy_id',
        'classroom_id',
        // 'receive_amount',
        // 'return_amount',
        // 'over_amount',
        'payment',
        'payment_of',
        'month',
        'midterm',
        'final',
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december',
    ];


    public function student()
    {
        return $this->hasOne(Student::class, 'id', 'student_id')->with('studentclass');
    }
    public function yearstudy()
    {
        return $this->hasOne(Yearstudy::class, 'id', 'yearstudy_id');
    }
    public function classroom()
    {
        return $this->hasOne(Classroom::class, 'id', 'classroom_id')->with('floorstudy');
    }
    public function items()
    {
        return $this->hasMany(ListItem::class, 'tuition_id', 'id');
    }




    protected $appends = [
        'type_payment_label',
        'type_payment',
        'items_sum_price',
    ];

    public function getTypePaymentLabelAttribute()
    {
        return $this->payment == 1 ? 'ເງີນໂອນ' : 'ເງີນສົດ';
    }
    public function getTypePaymentAttribute()
    {
        return $this->payment_of == 0 ? 'ເດື່ອນ' : ($this->payment_of == 1 ? 'ພາກຮຽນ I' : ($this->payment_of == 2 ? 'ພາກຮຽນ II' : 'ພາກຮຽນ I ແລະ ພາກຮຽນ II'));
    }

    public function getItemsSumPriceAttribute()
    {
        return $this->items()->sum('total_amout');
    }
}
