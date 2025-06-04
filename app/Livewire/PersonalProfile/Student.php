<?php

namespace App\Livewire\PersonalProfile;

use Livewire\Component;

class Student extends Component
{
    public function render()
    {
        return view('livewire.personal-profile.student');
    }
    public function onModalShow()
    {
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }
    public function onModalShowSearch()
    {
        $this->js("modalShowSearch()");
    }
    public function onModalCloseSearch()
    {
        $this->js("modalcloseSearch()");
    }
}
