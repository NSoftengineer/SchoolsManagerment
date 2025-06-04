<?php

namespace App\Livewire\Setting;

use App\Models\Typeincome as ModelsTypeincome;
use Livewire\Component;

class TypeIncome extends Component
{
    public $name;
    public $isId;
    public $TypeincomeData = [];
    protected $listeners = ['deleteTypeIncome' => 'deleteIncomeType'];

    public function render()
    {
        $this->TypeincomeData = ModelsTypeincome::all();
        return view('livewire.setting.type-income');
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $data = ModelsTypeincome::find($id);
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

    public function SaveTypeincome()
    {
        $validate = $this->validate([
            'name' => ['required', 'string'],
        ]);

        if ($this->isId != false) {
            $user = ModelsTypeincome::find($this->isId);
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
            $user = ModelsTypeincome::create($validate);
            $this->name = '';
            if ($user) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function deleteIncomeType()
    {
        $user = ModelsTypeincome::find($this->isId);
        if ($user) {
            $user->delete();
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
}
