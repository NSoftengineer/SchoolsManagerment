<?php

namespace App\Livewire\Setting;

use Livewire\Component;
use App\Models\TypeTeacher as ModelTypeTeacher; // Ensure you have the correct model imported

class TypeTeacher extends Component
{
    public $name;
    public $isId;
    public $TypeTeacher = [];
    protected $listeners = ['deleteStudyTeacher' => 'Teacherdelete'];

    public function render()
    {
        $this->TypeTeacher = ModelTypeTeacher::all();
        return view('livewire.setting.type-teacher');
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $typeTeacher = ModelTypeTeacher::find($id);
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
            $typeTeacher = ModelTypeTeacher::find($this->isId);
            $typeTeacher->name = $this->name;
            $teacher = $typeTeacher->update();
            if ($teacher) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        } else {
            $teacher =  ModelTypeTeacher::create(['name' => $this->name]);
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
        $typeTeacher = ModelTypeTeacher::find($this->isId);
        if ($typeTeacher) {
            $typeTeacher->delete();
            $this->js('alertSuccess()');
        } else {
            $this->js('alertError()');
        }
    }
}
