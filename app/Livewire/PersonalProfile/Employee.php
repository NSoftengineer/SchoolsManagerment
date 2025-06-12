<?php

namespace App\Livewire\PersonalProfile;

use App\Models\Educational;
use App\Models\Employee as ModelsEmployee;
use App\Models\TeachingCurrent;
use App\Models\TeachingHistory;
use Livewire\Component;

class Employee extends Component
{
    protected $listeners = ['EmployeeDelete' => 'DeleteEmployee'];
    public $employees = [];
    public $isId;
    public function render()
    {
        $this->employees = ModelsEmployee::all();
        return view('livewire.personal-profile.employee');
    }

    public function DeleteEmployee()
    {
        $employee = ModelsEmployee::find($this->isId); // <-- changed here
        if ($employee) {
            $employee->delete();
            TeachingCurrent::where('employee_id', $this->isId)->delete();;
            TeachingHistory::where('employee_id', $this->isId)->delete();;
            Educational::where('employee_id', $this->isId)->delete();;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
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
