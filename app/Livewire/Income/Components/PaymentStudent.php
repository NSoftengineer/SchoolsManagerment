<?php

namespace App\Livewire\Income\Components;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\TuitionFees;
use Livewire\Component;

class PaymentStudent extends Component
{
    public $selectClass = [];
    public $Itemstudent = [];
    public $student = [];
    public $selectedClass = "";
    public $payment_of = "";
    public $TuitionFees = [];
    public $student_id = "";
    public $cost = 0;
    public $studycost = 0;
    public $studycost_sum = 0;
    public $numb = 0;
    public function render()
    {
        $this->selectClass = Classroom::all();
        return view('livewire.income.Components.payment-student');
    }

    public function selectStudent($student_id)
    {
        $this->studycost_sum = 0;
        $this->cost  = 0;
        $this->student_id = $student_id;
        $this->TuitionFees = TuitionFees::with('student')->where('student_id', $this->student_id)->get();
        foreach ($this->TuitionFees as $key => $value) {
            $this->numb = $key + 1;
            $this->studycost = $value->student->studentclass->studycost->price;
            $this->studycost_sum += $value->student->studentclass->studycost->price;
        }
    }

    public function selectCost($cost)
    {
        $this->cost = $cost;
    }

    public function selectdataclass()
    {
        try {
            $this->Itemstudent = [];
            if ($this->selectedClass != "") {
                $this->student = Student::with(['studentclass', 'tuitionfees'])->whereHas('studentclass', function ($query) {
                    $query->where('classrooms_id', $this->selectedClass);
                })->get();

                // if (count($this->student) > 0) {
                //     foreach ($this->student as $key => $value) {
                //         $this->Itemstudent[] = [
                //             "id" => "0",
                //             "name" => "ຄ່າລົງທະບຽນຮຽນ {$value->studentclass->classroom->name}",
                //             "items" => 1,
                //             "price" => $value->studentclass->studycost->price,
                //             "priceTotal" => $value->studentclass->studycost->price,
                //             "type" => 0,
                //             "disabled" => "disabled",
                //         ];
                //     }

                //     $this->item = coststudy::with('groupitem')->where('classrooms_id', $this->selectedClass)->firstOrFail();
                //     $this->price = 0;
                //     $this->discountprice = 0;

                //     foreach ($this->item->groupitem->items as $key => $value) {
                //         $this->Itemstudent[] = [
                //             "id" => $value->id,
                //             "name" => $value->name,
                //             "items" => 1,
                //             "price" => $value->price,
                //             "priceTotal" => $value->price,
                //             "type" => $value->type_items,
                //             "disabled" =>  $value->type_items == 1 ? "disabled" : '',
                //         ];
                //     }
                // } else {
                //     $this->js("alertErrorStudent('ບໍ່ພົບຂໍ້ມູນໃນຫ້ອງນີ້')");
                // }
            }
            // $this->countPrice();
        } catch (\Throwable $th) {
            $this->js("alertErrorStudent('ບໍ່ພົບຂໍ້ມູນໃນຫ້ອງນີ້')");
        }
    }



    public function clickbbb()
    {
        $this->js("alert('bbb')");
    }

    public function onModalShowFormPaymentStudent()
    {
        $this->js("modalShowFormPaymentStudent()");
    }
    public function onModalCloseFormPaymentStudent()
    {
        $this->js("modalcloseFormPaymentStudent()");
    }
}
