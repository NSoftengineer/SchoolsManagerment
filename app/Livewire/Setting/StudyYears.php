<?php

namespace App\Livewire\Setting;

use App\Models\Typeexpenses;
use App\Models\Yearstudy;
use Livewire\Component;

class StudyYears extends Component
{
    public $name;
    public $year_start;
    public $year_end;
    public $isId;
    public $YearstudyData = [];
    protected $listeners = ['YearsDelete' => 'DeleteYears'];

    public function render()
    {
        $this->YearstudyData = Yearstudy::all();
        $type_expenses = Typeexpenses::all();
        return view('livewire.setting.study-years')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $typeTeacher = Yearstudy::find($id);
            if ($typeTeacher) {
                $this->name = $typeTeacher->name;
                $this->year_start = $typeTeacher->year_start;
                $this->year_end = $typeTeacher->year_end;
            } else {
                $this->reset(['name', 'year_start', 'year_end', 'isId']);
            }
        } else {
            $this->reset(['name', 'year_start', 'year_end', 'isId']);
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
            'year_start' => 'required',
            'year_end' => 'required',
        ]);

        if ($this->isId) {
            $typeTeacher = Yearstudy::find($this->isId);
            $typeTeacher->name = $this->year_start . '-' . $this->year_end;
            $typeTeacher->year_start = $this->year_start;
            $typeTeacher->year_end = $this->year_end;
            $teacher = $typeTeacher->update();
            if ($teacher) {
                $this->js('alertSuccess()');
                $this->reset(['name', 'year_start', 'year_end', 'isId']);
                $this->onModalClose();
            } else {
                $this->js('alertError()');
            }
        } else {
            $teacher =  Yearstudy::create(
                [
                    'name' => $this->year_start . '-' . $this->year_end,
                    'year_start' => $this->year_start,
                    'year_end' => $this->year_end,
                ]
            );
            $this->reset(['name', 'year_start', 'year_end', 'isId']);
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
