<?php

namespace App\Livewire\Setting;

use App\Models\Yearstudy;
use Livewire\Component;

class StudyYears extends Component
{
    public $name;
    public $isId;
    public $YearstudyData = [];
    protected $listeners = ['YearsDelete' => 'DeleteYears'];

    public function render()
    {
        $this->YearstudyData = Yearstudy::all();
        return view('livewire.setting.study-years');
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $typeTeacher = Yearstudy::find($id);
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

    public function SaveYears()
    {
        $this->validate([
            'name' => 'required',
        ]);

        if ($this->isId) {
            $typeTeacher = Yearstudy::find($this->isId);
            $typeTeacher->name = $this->name;
            $teacher = $typeTeacher->update();
            if ($teacher) {
                $this->js('alertSuccess()');
                $this->reset(['name', 'isId']);
                $this->onModalClose();
            } else {
                $this->js('alertError()');
            }
        } else {
            $teacher =  Yearstudy::create(['name' => $this->name]);
            $this->reset(['name', 'isId']);

            if ($teacher) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function DeleteYears()
    {
        $typeTeacher = Yearstudy::find($this->isId);
        if ($typeTeacher) {
            $typeTeacher->delete();
            $this->js('alertSuccess()');
        } else {
            $this->js('alertError()');
        }
    }
}
