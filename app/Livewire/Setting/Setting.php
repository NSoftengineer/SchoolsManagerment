<?php

namespace App\Livewire\Setting;

use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        return view('livewire.setting.setting');
    }

    public function go2($path)
    {
        $this->redirectRoute($path);
    }
}
