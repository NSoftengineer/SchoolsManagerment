<?php

namespace App\Livewire\Income\Components;

use App\Models\Payment;
use App\Models\TuitionFees;
use Livewire\Component;

class RegisterStudentPrint extends Component
{
    public $invoice;
    public $infomation = [];
    public $items = [];

    public function render()
    {
        $this->infomation = Payment::with(['student', 'classroom', 'yearstudy', 'tuitionfees'])
            ->where('invoice', $this->invoice)->first();
        // TuitionFees::with(['student', 'classroom', 'yearstudy', 'items'])
        // ->where('invoice', $this->invoice)->first();
        // $this->items = $this->infomation->tuitionfees->items()->where('payment_of', $this->infomation->tuitionfees->payment_of)->get();
        $this->items = $this->infomation->tuitionfees->items()->where('invoice', $this->invoice)->get();

        return view('livewire.income.Components.register-student-print')->layout('components.layouts.print');
    }
}
