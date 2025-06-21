<?php

namespace App\Livewire\Setting;

use App\Models\Classroom;
use App\Models\coststudy;
use App\Models\Groupitem;
use App\Models\Typeexpenses;
use App\Models\Yearstudy;
use Livewire\Component;

class StudyCost extends Component
{
    public $ClassRoom = [];
    public $Yearstudy = [];
    public $GroupItem = [];
    public $studyCostData = [];
    public $isId;
    public $classrooms_id;
    public $yearstudies_id;
    public $groupitems_id;
    public $price;
    public $type_payment = 2;
    protected $listeners = ['StudyCost' => 'DeleteCostStudy'];

    public function render()
    {
        $this->ClassRoom = Classroom::all();
        $this->Yearstudy = Yearstudy::all();
        $this->GroupItem = Groupitem::all();
        $this->studyCostData = coststudy::with('classroom', 'yearstudy', 'groupitem')->get();
        $type_expenses = Typeexpenses::all();
        return view('livewire.setting.study-cost')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);;
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $data = coststudy::find($id);
            $this->classrooms_id = $data->classrooms_id;
            $this->yearstudies_id = $data->yearstudies_id;
            $this->groupitems_id = $data->groupitems_id;
            $this->price = $data->price;
            $this->type_payment = $data->type_payment;
        } else {
            $this->isId = false;
            $this->classrooms_id = '';
            $this->yearstudies_id = '';
            $this->groupitems_id = '';
            $this->price = '';
            $this->type_payment = 2;
        }
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }

    public function SaveStudyCost()
    {
        $validate = $this->validate([
            'classrooms_id' => ['required', 'integer'],
            'yearstudies_id' => ['required', 'integer'],
            'groupitems_id' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'type_payment' => ['required', 'integer'],
        ]);

        if ($this->isId != false) {
            $user = coststudy::find($this->isId);
            $users = $user->update($validate);
            if ($users) {
                $this->js('alertSuccess()');
                $this->isId = false;
                $this->classrooms_id = '';
                $this->yearstudies_id = '';
                $this->groupitems_id = '';
                $this->price = '';
                $this->type_payment = 2;
                $this->onModalClose();
            } else {
                $this->js('alertError()');
            }
        } else {
            $user = coststudy::create($validate);
            if ($user) {
                $this->js('alertSuccess()');
                $this->classrooms_id = '';
                $this->yearstudies_id = '';
                $this->groupitems_id = '';
                $this->price = '';
                $this->type_payment = 2;
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function DeleteCostStudy()
    {
        $user = coststudy::find($this->isId);
        if ($user) {
            $user->delete();
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
}
