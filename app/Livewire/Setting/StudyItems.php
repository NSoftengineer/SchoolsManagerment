<?php

namespace App\Livewire\Setting;

use App\Models\Groupitem;
use App\Models\Itemforregister;
use App\Models\Typeexpenses;
use Livewire\Component;

class StudyItems extends Component
{

    // groupitems_id
    // name
    // price
    // default
    // type_items
    public $isId;
    public $groupitems_id;
    public $name;
    public $price;
    public $default = 0;
    public $type_items = 0;
    public $itemData = [];


    /** Group */
    public $group_id;
    public $group_name;
    public $groupItemData = [];

    protected $listeners = [
        'GroupItemDelete' => 'DeleteGroupItem',
        'ItemDelete' => 'DeleteItem',
    ];

    public function render()
    {
        $this->groupItemData = Groupitem::all();
        $this->itemData = Groupitem::with(['items'])->get();
        $type_expenses = Typeexpenses::all();
        return view('livewire.setting.study-items')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
    public function onModalShow()
    {
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }
    public function onModalGroupShow()
    {
        $this->js("modalGroupShow()");
    }
    public function onModalGrouClose()
    {
        $this->js("modalGroupclose()");
    }

    /** Item */
    public function onItemSave()
    {
        $validate = $this->validate([
            'groupitems_id' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'default' => ['required', 'integer'],
            'type_items' => ['required', 'integer'],
        ]);

        if ($this->isId == '') {
            $GroupItem = Itemforregister::create($validate);
            if ($GroupItem) {
                $this->js('alertSuccess()');
                // $this->groupitems_id = '';
                $this->name = '';
                $this->price = '';
                $this->default = 0;
                $this->type_items = 0;
            } else {
                $this->js('alertError()');
            }
        } else {
            $GroupItem = Itemforregister::find($this->groupitems_id);
            if ($GroupItem) {
                $GroupItem->update($validate);
                $this->js('alertSuccess()');
                $this->isId = '';
                $this->groupitems_id = '';
                $this->name = '';
                $this->price = '';
                $this->default = 0;
                $this->type_items = 0;
            } else {
                $this->js('alertError()');
            }
        }
    }


    /** Group */
    public function onGroupSave()
    {
        $validate = $this->validate([
            'group_name' => ['required', 'string'],
        ]);
        $GroupItem = Groupitem::create([
            'name' => $this->group_name,
        ]);
        if ($GroupItem) {
            $this->js('alertSuccess()');
            $this->group_name = '';
        } else {
            $this->js('alertError()');
        }
    }

    public function DeleteGroupItem()
    {
        $GroupItem = Groupitem::find($this->group_id);
        if ($GroupItem) {
            $GroupItem->delete();
            $this->js('alertSuccess()');
            $this->group_id = '';
        } else {
            $this->js('alertError()');
        }
    }
    public function DeleteItem()
    {
        $Item = Itemforregister::find($this->isId);
        if ($Item) {
            $Item->delete();
            $this->js('alertSuccess()');
            $this->isId = '';
        } else {
            $this->js('alertError()');
        }
    }
}
