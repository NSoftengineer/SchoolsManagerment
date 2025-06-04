<?php

namespace App\Livewire\Income\Components;

use Livewire\Component;

class PaymentStudent extends Component
{
    public function render()
    {
        return view('livewire.income.Components.payment-student');
    }
    public function clickbbb()
    {
        $this->js("alert('bbb')");
    }

    public function onModalShowFormPaymentStudent()
    {
        $this->js("modalShowFormPaymentStudent()");
    }
    public function onModalCloseFormPaymentStudent()
    {
        $this->js("modalcloseFormPaymentStudent()");
    }
}
