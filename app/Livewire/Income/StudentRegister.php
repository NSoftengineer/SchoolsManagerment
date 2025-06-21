<?php

namespace App\Livewire\Income;

use App\Models\Classroom;
use App\Models\Typeexpenses;
use Livewire\Component;

class StudentRegister extends Component
{


    public function render()
    {
        $type_expenses = Typeexpenses::all();
        return view('livewire.income.student-register')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
}
