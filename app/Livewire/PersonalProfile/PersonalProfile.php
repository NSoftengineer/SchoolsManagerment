<?php

namespace App\Livewire\PersonalProfile;

use App\Models\Typeexpenses;
use Livewire\Component;

class PersonalProfile extends Component
{
    public function render()
    {
        $type_expenses = Typeexpenses::all();
        return view('livewire.personal-profile.personal-profile')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
}
