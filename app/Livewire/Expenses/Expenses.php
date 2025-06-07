<?php

namespace App\Livewire\Expenses;

use App\Models\Typeexpenses;
use App\Models\Expenses as ModelExpenses;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Expenses extends Component
{
    public $ExpensesData = [];
    public $type;
    public $isId;
    public $name;
    public $description;
    public $date_at;
    public $typeexpenses_id;
    public $amount;
    public $price;
    public $user_id;
    public $status = 1;
    public $dateSearch;
    public $datesearchdata;

    public $title_expenses;
    protected $listeners = ['Expenses' => 'DeleteExpenses'];
    public function mount()
    {
        // $this->type =  request()->type ?? '0';
        $date = Carbon::now()->format('Y-m-d');
        $this->dateSearch = $date;
        // $date_str = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->startOfDay();
        // $date_end = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay();
        // $this->ExpensesData = ModelExpenses::where('typeexpenses_id', $this->type)
        //     ->whereBetween('created_at', [$date_str, $date_end])
        //     ->get();
    }
    public function render()
    {
        $this->type =  request()->type ?? '0';

        $this->user_id = Auth::id();
        if ($this->type > 0) {
            $TypeExpenses = Typeexpenses::find($this->type);
            $this->title_expenses = $TypeExpenses->name;
            $this->typeexpenses_id = $this->type;
        }

        if ($this->datesearchdata != "") {
            $this->dateSearch = $this->datesearchdata;
        }


        $date_str = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->startOfDay();
        $date_end = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay();

        $this->ExpensesData = ModelExpenses::where('typeexpenses_id', $this->typeexpenses_id)
            ->whereBetween('created_at', [$date_str, $date_end])
            ->get();


        return view('livewire.expenses.expenses');
    }

    public function search()
    {
        // $this->js("alert('" . Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay() . "')");
        // $this->dates = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay();
        // $this->ExpensesData = [];
        // $this->dateSearch = "";
        $date_str = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->startOfDay();
        $date_end = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay();
        $this->ExpensesData = ModelExpenses::where('typeexpenses_id', $this->type)
            ->whereBetween('created_at', [$date_str, $date_end])
            ->get();
        // $date = Carbon::now()->format('Y-m-d');
        // if (!$this->date) {
        //     $this->date = $date;
        // } else {
        //     $this->date = Carbon::parse($this->date)->format('Y-m-d');
        // }
        // $this->ExpensesData = ModelExpenses::where('typeexpenses_id', $this->type)->whereDate('created_at', $this->date)->get();
    }

    public function onModalShow($id = false)
    {
        if ($id) {
            $this->isId = $id;
            $Expenses = ModelExpenses::find($id);
            $this->name = $Expenses->name;
            $this->description = $Expenses->description;
            $this->amount = $Expenses->amount;
            $this->price = $Expenses->price;
            $this->status = $Expenses->status;
        } else {
            $this->isId = false;
            $this->name = '';
            $this->description = '';
            $this->amount = '';
            $this->price = '';
            $this->status = 1;
        }
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }

    public function SaveExpenses()
    {
        $validate = $this->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            // 'typeexpenses_id' => ['required', 'integer'],
            'date_at' => ['nullable', 'date'],
            'status' => ['required', 'integer'],
            'amount' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'user_id' => ['required', 'integer'],
        ]);

        if ($this->isId != false) {
            $expenses = ModelExpenses::find($this->isId);
            $expense = $expenses->update(array_merge($validate, ["typeexpenses_id" => $this->typeexpenses_id]));
            if ($expense) {
                $this->js('alertSuccess()');
                $this->isId = false;
                $this->name = '';
                $this->description = '';
                $this->status = 1;
                $this->amount = '';
                $this->price = '';
                $this->user_id = Auth::id();
                $date_str = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->startOfDay();
                $date_end = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay();
                $this->ExpensesData = ModelExpenses::where('typeexpenses_id', $this->type)
                    ->whereBetween('created_at', [$date_str, $date_end])
                    ->get();

                $this->onModalClose();
            } else {
                $this->js('alertError()');
            }
        } else {
            $expense = ModelExpenses::create(array_merge($validate, ["typeexpenses_id" => $this->typeexpenses_id]));
            if ($expense) {
                $this->js('alertSuccess()');
                $this->name = '';
                $this->description = '';
                $this->status = 1;
                $this->amount = '';
                $this->price = '';
                $this->user_id = Auth::id();

                $date_str = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->startOfDay();
                $date_end = Carbon::createFromFormat('Y-m-d', $this->dateSearch)->endOfDay();
                $this->ExpensesData = ModelExpenses::where('typeexpenses_id', $this->type)
                    ->whereBetween('created_at', [$date_str, $date_end])
                    ->get();
            } else {
                $this->js('alertError()');
            }
        }
    }

    public function DeleteExpenses()
    {
        $expenses = ModelExpenses::find($this->isId);
        if ($expenses) {
            $expenses->delete();
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
}
