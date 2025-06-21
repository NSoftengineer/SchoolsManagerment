<?php

namespace App\Livewire\Setting;

use App\Models\Typeexpenses;
use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        $type_expenses = Typeexpenses::all();
        return view('livewire.setting.setting')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }

    public function go2($path)
    {
        $this->redirectRoute($path);
    }
}
