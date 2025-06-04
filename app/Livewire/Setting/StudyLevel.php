<?php

namespace App\Livewire\Setting;

use App\Models\Floorstudy;
use Livewire\Component;

class StudyLevel extends Component
{
    public $name;
    public $isId;
    public $FloorstudyData = [];
    protected $listeners = ['deleteStudyLevel' => 'deleteLevelStudy'];

    public function render()
    {
        $this->FloorstudyData = Floorstudy::all();
        return view('livewire.setting.study-level');
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $data = Floorstudy::find($id);
            $this->name = $data->name;
        } else {
            $this->isId = false;
            $this->name = '';
        }
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }

    public function SaveStudyLevel()
    {
        $validate = $this->validate([
            'name' => ['required', 'string'],
        ]);

        if ($this->isId != false) {
            $user = Floorstudy::find($this->isId);
            $user->name = $this->name;
            $user->save();
            $this->isId = false;
            $this->name = '';
            if ($user) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        } else {
            $user = Floorstudy::create($validate);
            $this->name = '';
            if ($user) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function deleteLevelStudy()
    {
        $user = Floorstudy::find($this->isId);
        if ($user) {
            $user->delete();
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
}
