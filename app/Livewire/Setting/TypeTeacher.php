<?php

namespace App\Livewire\Setting;

use App\Models\Typeexpenses;
use App\Models\Typeteacher as ModelsTypeteacher;
use Livewire\Component;


class TypeTeacher extends Component
{
    public $name;
    public $isId;
    public $TypeTeacher = [];
    protected $listeners = ['deleteStudyTeacher' => 'Teacherdelete'];

    public function render()
    {
        $this->TypeTeacher = ModelsTypeteacher::all();
        $type_expenses = Typeexpenses::all();
        return view('livewire.setting.type-teacher')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $typeTeacher = ModelsTypeteacher::find($id);
            if ($typeTeacher) {
                $this->name = $typeTeacher->name;
            } else {
                $this->reset(['name', 'isId']);
            }
        } else {
            $this->reset(['name', 'isId']);
        }
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }

    public function SaveTypeTeacher()
    {
        $this->validate([
            'name' => 'required',
        ]);

        if ($this->isId) {
            $typeTeacher = ModelsTypeteacher::find($this->isId);
            $typeTeacher->name = $this->name;
            $teacher = $typeTeacher->update();
            if ($teacher) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        } else {
            $teacher =  ModelsTypeteacher::create(['name' => $this->name]);
            $this->reset(['name', 'isId']);
            if ($teacher) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function Teacherdelete()
    {
        $typeTeacher = ModelsTypeteacher::find($this->isId);
        if ($typeTeacher) {
            $typeTeacher->delete();
            $this->js('alertSuccess()');
        } else {
            $this->js('alertError()');
        }
    }
}
