<?php

namespace App\Livewire\Income\Components;

use App\Models\TuitionFees;
use Livewire\Component;

class RegisterStudentPrint extends Component
{
    public $invoice;
    public $infomation = [];

    public function render()
    {
        $this->infomation = TuitionFees::with('student')->first();
        return view('livewire.income.components.register-student-print')->layout('components.layouts.print');
    }
}
