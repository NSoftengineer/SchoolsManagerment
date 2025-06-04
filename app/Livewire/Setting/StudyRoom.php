<?php

namespace App\Livewire\Setting;

use App\Models\Classroom;
use Livewire\Component;

class StudyRoom extends Component
{
    public $name;
    public $isId;
    public $ClassroomData = [];

    protected $listeners = ['deleteStudyRoom' => 'deleteRoomStudy'];
    public function render()
    {
        $this->ClassroomData = Classroom::all();
        return view('livewire.setting.study-room');
    }

    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $data = Classroom::find($id);
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

    public function SaveStudyRoom()
    {
        $validate = $this->validate([
            'name' => ['required', 'string'],
        ]);

        if ($this->isId != false) {
            $user = Classroom::find($this->isId);
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
            $user = Classroom::create($validate);
            $this->name = '';
            if ($user) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function deleteRoomStudy()
    {
        $user = Classroom::find($this->isId);
        if ($user) {
            $user->delete();
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
}
