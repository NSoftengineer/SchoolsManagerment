<?php

namespace App\Livewire\Income\Components;

use App\Models\Classroom;
use App\Models\coststudy;
use App\Models\Itemforregister;
use App\Models\ListItem;
use App\Models\Student;
use App\Models\TuitionFees;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterStudent extends Component
{
    // public $item = ['ຄ່າລົງທະບຽນຮຽນ ຫ້ອງ ປ 5/2', 'ຄ່າຮຽນ ພາກຮຽນ I ສົກຮຽນ 2025/2026', 'ຄ່າອາຫານ', 'ຄ່າລົດຮັບສົ່ງນັກຮຽນ', 'ຄ່າປື້ມແບບຮຽນ', 'ຄ່າຊຸດນັກຮຽນ'];
    public $item;
    public $price = 0;
    public $unseletedprice = 0;
    public $discountprice = 0;
    public $unseleted = [];
    public $selectClass = [];
    public $selectedClass;
    public $student = [];
    public $Itemstudent = [];
    public $ItemstudentForInsert = [];
    public $ItemstudentTotal = 0;
    public $selectedStudent = [];
    public $payment_of;
    public $student_id;
    public $classroom_id;
    public $yearstudies_id;
    public $floorstudy_id;
    public $payment = 1;


    public function render()
    {
        $this->selectClass = Classroom::all();
        return view('livewire.income.Components.register-student');
    }


    /** Remove */
    public function selectPrice($id)
    {
        $this->unseletedprice = 0;
        $unseletedData = $id ? array_filter($this->unseleted, fn($data) => stripos($data, $id) !== false) : $this->unseleted;
        if ($unseletedData) {
            $this->unseleted = array_values(array_diff($this->unseleted, $unseletedData));
        } else {
            $this->unseleted[] = $id;
        }
        $this->ItemstudentTotal = 0;
        $this->ItemstudentForInsert = [];
        foreach ($this->Itemstudent as &$item) {
            if (!in_array($item['id'], $this->unseleted)) {
                if ($item['type'] != 1) {
                    $this->ItemstudentTotal += $item['priceTotal'];
                }
                $this->ItemstudentForInsert[] = [
                    "id" => $item["id"],
                    "name" => $item["name"],
                    "items" => $item["items"],
                    "price" => $item["price"],
                    "priceTotal" => $item["priceTotal"],
                    "type" => $item["type"],
                    "disabled" => $item["disabled"]
                ];
            }
        }
    }
    public function plus($targetId)
    {
        foreach ($this->Itemstudent as &$item) {
            if ($item['id'] == $targetId) {
                $item['items'] += 1;
                $item['priceTotal'] = $item['items'] * $item['price'];
                break; // หยุด loop เมื่อเจอแล้ว
            }
        }
        unset($item);
        $this->countPrice();
    }
    public function minus($targetId)
    {
        foreach ($this->Itemstudent as &$item) {
            if ($item['id'] == $targetId) {
                $item['items'] -= 1;
                $item['priceTotal'] = $item['items'] * $item['price'];
                break; // หยุด loop เมื่อเจอแล้ว
            }
        }
        unset($item);
        $this->countPrice();
    }
    public function selectdataclass()
    {
        try {
            $this->Itemstudent = [];
            if ($this->selectedClass != "") {
                $this->student = Student::with('studentclass')->whereHas('studentclass', function ($query) {
                    $query->where('classrooms_id', $this->selectedClass);
                })->get();

                if (count($this->student) > 0) {
                    foreach ($this->student as $key => $value) {
                        $this->Itemstudent[] = [
                            "id" => "0",
                            "name" => "ຄ່າລົງທະບຽນຮຽນ {$value->studentclass->classroom->name}",
                            "items" => 1,
                            "price" => $value->studentclass->studycost->price,
                            "priceTotal" => $value->studentclass->studycost->price,
                            "type" => 0,
                            "disabled" => "disabled",
                        ];
                    }

                    $this->item = coststudy::with('groupitem')->where('classrooms_id', $this->selectedClass)->firstOrFail();
                    $this->price = 0;
                    $this->discountprice = 0;

                    foreach ($this->item->groupitem->items as $key => $value) {
                        $this->Itemstudent[] = [
                            "id" => $value->id,
                            "name" => $value->name,
                            "items" => 1,
                            "price" => $value->price,
                            "priceTotal" => $value->price,
                            "type" => $value->type_items,
                            "disabled" =>  $value->type_items == 1 ? "disabled" : '',
                        ];
                    }
                } else {
                    $this->js("alertErrorStudent('ບໍ່ພົບຂໍ້ມູນໃນຫ້ອງນີ້')");
                }
            }
            $this->countPrice();
        } catch (\Throwable $th) {
            $this->js("alertErrorStudent('ບໍ່ພົບຂໍ້ມູນໃນຫ້ອງນີ້')");
        }
    }

    public function countPrice()
    {
        $this->ItemstudentTotal = 0;
        $this->ItemstudentForInsert = [];
        foreach ($this->Itemstudent as &$item) {
            if ($item['type'] != 1) {
                $this->ItemstudentTotal += $item['priceTotal'];
            }
            $this->ItemstudentForInsert[] = [
                "id" => $item["id"],
                "name" => $item["name"],
                "items" => $item["items"],
                "price" => $item["price"],
                "priceTotal" => $item["priceTotal"],
                "type" => $item["type"],
                "disabled" => $item["disabled"]
            ];
        }
    }

    public function selectStuden($idStudent, $classroom_id, $yearstudies_id, $floorstudy_id)
    {
        if ($this->payment_of != "") {
            // $this->js("alert('Can:{$idStudent} | {$classroom_id} | {$yearstudies_id}')");
            $this->student_id = $idStudent;
            $this->classroom_id = $classroom_id;
            $this->yearstudies_id = $yearstudies_id;
            $this->floorstudy_id = $floorstudy_id;
        } else {
            $this->js("alert('not found')");
        }
        // $this->dispatch('printbill', '123');
    }

    public function studentsprint()
    {
        $this->dispatch('printbill', '123');
    }



    public function paymentSave()
    {

        $count = TuitionFees::where('student_id', $this->student_id)->where('yearstudy_id', $this->yearstudies_id)->where('classroom_id', $this->classroom_id)->count();
        if ($count == 0) {
            // Get the current date in the Laos timezone
            $currentDate = Carbon::now('Asia/Vientiane')->toDateString();

            // Count how many parcels have been created today
            $parcelCountToday = TuitionFees::whereDate('created_at', $currentDate)->count() + 1;
            // Generate the 3-digit increment for the current day
            $increment = str_pad($parcelCountToday, 3, '0', STR_PAD_LEFT);
            // Generate the tracking number including seconds and the increment
            $invoice = 'LKCN-' . Carbon::now('Asia/Vientiane')->format('ymd') . '-' . $increment;

            $payment = TuitionFees::create([
                'userid' => Auth::id(),
                'invoice' => $invoice,
                'student_id' =>  $this->student_id,
                'yearstudy_id' => $this->yearstudies_id,
                'classroom_id' => $this->classroom_id,
                'receive_amount' => $this->ItemstudentTotal,
                'return_amount' => "0",
                'over_amount' => "0",
                'payment' => $this->payment,
                'payment_of' => $this->payment_of,
                'month' => "09"
            ]);
            if ($payment) {
                foreach ($this->ItemstudentForInsert as &$item) {
                    ListItem::create([
                        'userid'        => Auth::id(),
                        'tuition_id'    => $payment->id,
                        'items_id'      => $item['id'],
                        'items_title'   => $item['name'],
                        'amount'        => $item['items'],
                        'amount_per_unit' => $item['price'],
                        'total_amout'   => $item['priceTotal'],
                        'type'          => $item['type'],
                    ]);
                }
            }
            $this->js('alertSuccess()');
            $this->dispatch('printbill', $invoice);
        } else {
            $this->js("alertErrorStudent('ໄດ້ລົງທະບຽນນັກຮຽນຜູ້ນີ້ແລ້ວ')");
        }
    }

    public function clickaaa()
    {
        $this->js("alert('aaaa')");
    }

    public function onModalShowFormRegisterStudent()
    {
        $this->js("modalShowFormRegisterStudent()");
    }
    public function onModalCloseFormRegisterStudent()
    {
        $this->js("modalcloseFormRegisterStudent()");
    }
}
