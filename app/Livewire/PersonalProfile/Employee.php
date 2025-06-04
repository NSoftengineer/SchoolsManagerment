<?php

namespace App\Livewire\PersonalProfile;

use Livewire\Component;

class Employee extends Component
{
    public function render()
    {
        return view('livewire.personal-profile.employee');
    }



    public function onModalShow()
    {
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }
}
