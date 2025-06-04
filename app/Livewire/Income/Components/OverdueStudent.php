<?php

namespace App\Livewire\Income\Components;

use Livewire\Component;

class OverdueStudent extends Component
{
    public $students_list = 0;
    public function render()
    {
        return view('livewire.income.Components.overdue-student');
    }

    public function onClickTable(){
        $this->students_list = 1;
    }
}
