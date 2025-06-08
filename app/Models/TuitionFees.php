<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TuitionFees extends Model
{
    protected $fillable = [
        'userid',
        'invoice',
        'student_id',
        'yearstudy_id',
        'classroom_id',
        'receive_amount',
        'return_amount',
        'over_amount',
        'payment',
        'payment_of',
        'month'
    ];


    public function student()
    {
        return $this->hasOne(Student::class, 'id', 'student_id');
    }
    public function yearstudy() {}
    public function classroom() {}
    // public function student(){

    // }


    protected $appends = [
        'type_payment_label',
        'type_payment'
    ];

    public function getTypePaymentLabelAttribute()
    {
        return $this->payment == 1 ? 'ເງີນໂອນ' : 'ເງີນສົດ';
    }
    public function getTypePaymentAttribute()
    {
        // // 0:ເດື່ອນ ຕໍ່ ເດືອນ, 1:ພາກຮຽນ I, 2:ພາກຮຽນ II, 3:ພາກຮຽນ I ແລະ ພາກຮຽນ II
        return $this->payment_of == 0 ? 'ເດື່ອນ' : ($this->payment_of == 1 ? 'ພາກຮຽນ I' : ($this->payment_of == 2 ? 'ພາກຮຽນ II' : 'ພາກຮຽນ I ແລະ ພາກຮຽນ II'));
        // return $this->payment_of == 0 ? 'ເດື່ອນ' : 'ssss';
    }
}
