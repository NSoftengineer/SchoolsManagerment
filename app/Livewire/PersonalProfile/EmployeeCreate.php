<?php

namespace App\Livewire\PersonalProfile;

use Livewire\Component;

class EmployeeCreate extends Component
{
    public $id = 0;
    public $update = null;
    public function render()
    {
        return view('livewire.personal-profile.employee-create');
    }
}
