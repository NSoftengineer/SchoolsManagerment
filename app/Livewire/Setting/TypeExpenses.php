<?php

namespace App\Livewire\Setting;

use App\Models\Typeexpenses as TypeexpensesModel;
use Livewire\Component;

class TypeExpenses extends Component
{
    public $name;
    public $isId;
    public $TypeexpensesData = [];

    protected $listeners = ['deleteTypeExpenses' => 'deleteExpenseType'];
    public function render()
    {
        $this->TypeexpensesData = TypeexpensesModel::all();
        $type_expenses = TypeexpensesModel::all();
        return view('livewire.setting.type-expenses')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $data = TypeexpensesModel::find($id);
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

    public function SaveTypeExpenses()
    {
        $validate = $this->validate([
            'name' => ['required', 'string'],
        ]);

        if ($this->isId != false) {
            $user = TypeexpensesModel::find($this->isId);
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
            $user = TypeexpensesModel::create($validate);
            $this->name = '';
            if ($user) {
                $this->js('alertSuccess()');
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function deleteExpenseType()
    {
        $user = TypeexpensesModel::find($this->isId);
        if ($user) {
            $user->delete();
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
}
