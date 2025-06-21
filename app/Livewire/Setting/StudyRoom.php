<?php

namespace App\Livewire\Setting;

use App\Models\Classroom;
use App\Models\Floorstudy;
use App\Models\Typeexpenses;
use Livewire\Component;

class StudyRoom extends Component
{
    public $name;
    public $floorstudies_id;
    public $isId;
    public $ClassroomData = [];
    public $floorstudiesData = [];

    protected $listeners = ['deleteStudyRoom' => 'deleteRoomStudy'];
    public function render()
    {
        $this->ClassroomData = Classroom::with('floorstudy')->get();
        $this->floorstudiesData = Floorstudy::all();

        $type_expenses = Typeexpenses::all();
        return view('livewire.setting.study-room')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }

    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $data = Classroom::find($id);
            $this->name = $data->name;
            $this->floorstudies_id = $data->floorstudies_id;
        } else {
            $this->isId = false;
            $this->name = '';
            $this->floorstudies_id = '';
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
            'floorstudies_id' => ['required', 'integer'],
        ]);

        if ($this->isId != false) {
            $user = Classroom::find($this->isId);
            $user->name = $this->name;
            $user->floorstudies_id = $this->floorstudies_id;
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
