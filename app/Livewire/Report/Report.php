<?php

namespace App\Livewire\Report;

use App\Models\Typeexpenses;
use Livewire\Component;

class Report extends Component
{
    public function render()
    {
        $type_expenses = Typeexpenses::all();
        return view('livewire.report.report')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
}
