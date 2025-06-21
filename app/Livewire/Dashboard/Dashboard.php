<?php

namespace App\Livewire\Dashboard;

use App\Models\Typeexpenses;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $type_expenses = Typeexpenses::all();
        return view('livewire.dashboard.dashboard')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
}
