<?php

namespace App\Livewire\Income\Components;

use Livewire\Component;

class RegisterStudent extends Component
{
    public $item = ['ຄ່າລົງທະບຽນຮຽນ ຫ້ອງ ປ 5/2', 'ຄ່າຮຽນ ພາກຮຽນ I ສົກຮຽນ 2025/2026', 'ຄ່າອາຫານ', 'ຄ່າລົດຮັບສົ່ງນັກຮຽນ', 'ຄ່າປື້ມແບບຮຽນ', 'ຄ່າຊຸດນັກຮຽນ'];
    public $price = ['300000', '3500000', '300000', '300000', '150000', '500000'];
    public function render()
    {
        return view('livewire.income.Components.register-student');
    }

    public function clickaaa()
    {
        $this->js("alert('aaaa')");
    }

    public function onModalShowFormRegisterStudent()
    {
        $this->js("modalShowFormRegisterStudent()");
    }
    public function onModalCloseFormRegisterStudent()
    {
        $this->js("modalcloseFormRegisterStudent()");
    }
}
