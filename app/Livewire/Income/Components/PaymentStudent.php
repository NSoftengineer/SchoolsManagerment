<?php

namespace App\Livewire\Income\Components;

use App\Models\Classroom;
use App\Models\ListItem;
use App\Models\Payment;
use App\Models\Student;
use App\Models\TuitionFees;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentStudent extends Component
{
    public $selectClass = [];
    public $Itemstudent = [];
    public $student = [];
    public $selectedClass = "";
    public $payment_of = "";
    public $TuitionFees = "";
    public $student_id = "";
    public $cost = 0;
    public $costPermonth = 0;
    public $studycost = 0;
    public $studycost_sum = 0;
    public $numb = 0;
    public $classroom_id;
    public $yearstudies_id;
    public $floorstudy_id;
    public $select_final = 0;
    public $payment = 1;
    public $select_january;
    public $select_february;
    public $select_march;
    public $select_april;
    public $select_may;
    public $select_june;
    public $select_july;
    public $select_august;
    public $select_september;
    public $select_october;
    public $select_november;
    public $select_december;
    public $arr_month = [];
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
    }

    public function selectCost($cost, $month = false)
    {
        if (!$month) {
            if ($this->select_final == 0) {
                $this->cost = 0;
            } else {
                $this->cost = $cost;
            }
        } else {
            if ($month == '10') {
                if ($this->select_october == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('10', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('10');
                }
            }
            if ($month == '11') {
                if ($this->select_november == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('11', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('11');
                }
            }
            if ($month == '12') {
                if ($this->select_december == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('12', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('12');
                }
            }
            if ($month == '1') {
                if ($this->select_january == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('1', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('1');
                }
            }
            if ($month == '2') {
                if ($this->select_february == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('2', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('2');
                }
            }
            if ($month == '3') {
                if ($this->select_march == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('3', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('3');
                }
            }
            if ($month == '4') {
                if ($this->select_april == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('4', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('4');
                }
            }
            if ($month == '5') {
                if ($this->select_may == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('5', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('5');
                }
            }
            if ($month == '6') {
                if ($this->select_june == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('6', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('6');
                }
            }
            if ($month == '7') {
                if ($this->select_july == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('7', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('7');
                }
            }
            if ($month == '8') {
                if ($this->select_august == 1) {
                    $this->cost += $cost;
                    $this->addMonthToArrayIfNotExists('8', $cost);
                } else {
                    $this->cost -= $cost;
                    $this->removeMonthFromArray('8');
                }
            }
            // $this->cost = $this->select_october;
        }
    }

    public function selectdataclass()
    {
        try {
            $this->Itemstudent = [];
            if ($this->selectedClass != "") {
                $this->student = Student::with(['studentclass', 'tuitionfees'])->whereHas('studentclass', function ($query) {
                    $query->where('classrooms_id', $this->selectedClass);
                })->get();
            }
        } catch (\Throwable $th) {
            $this->js("alertErrorStudent('ບໍ່ພົບຂໍ້ມູນໃນຫ້ອງນີ້')");
        }
    }
    public function selectStuden($idStudent, $classroom_id, $yearstudies_id, $floorstudy_id)
    {
        if ($this->payment_of != "") {
            $this->student_id = $idStudent;
            $this->classroom_id = $classroom_id;
            $this->yearstudies_id = $yearstudies_id;
            $this->floorstudy_id = $floorstudy_id;

            $TuitionFees = TuitionFees::with('student')->where('student_id', $idStudent)->first();
            $this->payment = $TuitionFees->payment_of;
            $midterm = 0;
            $final = 0;
            $january = 0;
            $february = 0;
            $march = 0;
            $april = 0;
            $may = 0;
            $june = 0;
            $july = 0;
            $august = 0;
            $september = 0;
            $october = 0;
            $november = 0;
            $december = 0;
            if ($TuitionFees->payment_of > 0) {

                if ($TuitionFees->midterm != null) {
                    $midterm = $TuitionFees->midterm;
                }
                if ($TuitionFees->final != null) {
                    $final = $TuitionFees->final;
                }
                $this->studycost_sum = $midterm + $final;
                $this->TuitionFees =  $TuitionFees;
            } else {
                if ($TuitionFees->january != null) {
                    $january = $TuitionFees->january;
                    $this->select_january = 1;
                }
                if ($TuitionFees->february != null) {
                    $february = $TuitionFees->february;
                    $this->select_february = 1;
                }
                if ($TuitionFees->march != null) {
                    $march = $TuitionFees->march;
                    $this->select_march = 1;
                }
                if ($TuitionFees->april != null) {
                    $april = $TuitionFees->april;
                    $this->select_april = 1;
                }
                if ($TuitionFees->may != null) {
                    $may = $TuitionFees->may;
                    $this->select_may = 1;
                }
                if ($TuitionFees->june != null) {
                    $june = $TuitionFees->june;
                    $this->select_june = 1;
                }
                if ($TuitionFees->july != null) {
                    $july = $TuitionFees->july;
                    $this->select_july = 1;
                }
                if ($TuitionFees->august != null) {
                    $august = $TuitionFees->august;
                    $this->select_august = 1;
                }
                if ($TuitionFees->september != null) {
                    $september = $TuitionFees->september;
                    $this->costPermonth = $TuitionFees->september;
                    $this->select_september = 1;
                }
                if ($TuitionFees->october != null) {
                    $october = $TuitionFees->october;
                    $this->select_october = 1;
                }
                if ($TuitionFees->november != null) {
                    $november = $TuitionFees->november;
                    $this->select_november = 1;
                }
                if ($TuitionFees->december != null) {
                    $december = $TuitionFees->december;
                    $this->select_december = 1;
                }
                $this->studycost_sum = $january + $february + $march + $april + $may + $june + $july + $august + $september + $october + $november + $december;
                $this->TuitionFees =  $TuitionFees;
            }
        } else {
            $this->js("alert('not found')");
        }
    }

    public function saveCost()
    {
        $tuitionfees = TuitionFees::with('classroom')->where('student_id', $this->student_id)->where('classroom_id', $this->classroom_id)
            ->where('yearstudy_id', $this->yearstudies_id)->first();
        // Get the current date in the Laos timezone
        $currentDate = Carbon::now('Asia/Vientiane')->toDateString();

        // Count how many parcels have been created today
        $parcelCountToday = Payment::whereDate('created_at', $currentDate)->count() + 1;
        // Generate the 3-digit increment for the current day
        $increment = str_pad($parcelCountToday, 3, '0', STR_PAD_LEFT);
        // Generate the tracking number including seconds and the increment
        $invoice = 'LKCN-' . Carbon::now('Asia/Vientiane')->format('ymd') . '-' . $increment;

        if ($this->select_final == 1) {
            if ($tuitionfees->final == "") {
                $payment = TuitionFees::find($tuitionfees->id)
                    ->update([
                        'userid' => Auth::id(),
                        'payment' => $this->payment,
                        'payment_of' => $this->payment_of,
                        'month' =>  $this->payment_of,
                        'final' => $this->cost,

                    ]);
                if ($payment) {
                    ListItem::create([
                        'invoice' => $invoice,
                        'userid'        => Auth::id(),
                        'tuition_id'    => $tuitionfees->id,
                        'items_id'      => '0',
                        'items_title'   => "ຄ່າຮຽນພາກຮຽນ II {$tuitionfees->classroom->name}",
                        'amount'        => 1,
                        'amount_per_unit' => $this->cost,
                        'total_amout'   => $this->cost,
                        'type'          => '0',
                        'payment_of' => $this->payment_of,
                    ]);

                    Payment::create(
                        [
                            'invoice' => $invoice,
                            'userid' => Auth::id(),
                            'student_id' => $this->student_id,
                            'yearstudy_id' => $this->yearstudies_id,
                            'classroom_id' => $this->classroom_id,
                            'tuition_id' => $tuitionfees->id,
                            'month' => $this->payment_of,
                            'receive_amount' => $this->cost,
                            'return_amount' => '0',
                            'over_amount' => '0',
                        ]
                    );
                }

                $this->js('alertSuccess()');
                $this->dispatch('printbill', $invoice);
            }
        } else {
            /** ຕໍ່ເດືອນ */
            $data = [];
            $monthdata = "";
            foreach ($this->arr_month as $key => $value) {
                if ($value['id'] == '10') {
                    $data['october'] = $value['price'];
                    $monthdata = "10";
                }
                if ($value['id'] == '11') {
                    $data['november'] = $value['price'];
                    $monthdata = "11";
                }
                if ($value['id'] == '12') {
                    $data['december'] = $value['price'];
                    $monthdata = "12";
                }
                if ($value['id'] == '1') {
                    $data['january'] = $value['price'];
                    $monthdata = "1";
                }
                if ($value['id'] == '2') {
                    $data['february'] = $value['price'];
                    $monthdata = "2";
                }
                if ($value['id'] == '3') {
                    $data['march'] = $value['price'];
                    $monthdata = "3";
                }
                if ($value['id'] == '4') {
                    $data['april'] = $value['price'];
                    $monthdata = "4";
                }
                if ($value['id'] == '5') {
                    $data['may'] = $value['price'];
                    $monthdata = "5";
                }
                if ($value['id'] == '6') {
                    $data['june'] = $value['price'];
                    $monthdata = "6";
                }
                if ($value['id'] == '7') {
                    $data['july'] = $value['price'];
                    $monthdata = "7";
                }
                if ($value['id'] == '8') {
                    $data['august'] = $value['price'];
                    $monthdata = "8";
                }
            }
            $data['userid'] = Auth::id();
            $data['payment'] = $this->payment;
            $data['payment_of'] = $this->payment_of;
            $data['month'] = $this->payment_of;
            $data['month'] = $monthdata;

            $payment = TuitionFees::find($tuitionfees->id)
                ->update($data);
            if ($payment) {
                foreach ($this->arr_month as $key => $value) {
                    $month = $value['id'];
                    ListItem::create([
                        'invoice' => $invoice,
                        'userid'        => Auth::id(),
                        'tuition_id'    => $tuitionfees->id,
                        'items_id'      => '0',
                        'items_title'   => "ຄ່າຮຽນເດືອນທີ {$month}",
                        'amount'        => 1,
                        'amount_per_unit' => $value['price'],
                        'total_amout'   => $value['price'],
                        'type'          => '0',
                        'payment_of' => $this->payment_of,
                    ]);
                }

                Payment::create(
                    [
                        'invoice' => $invoice,
                        'userid' => Auth::id(),
                        'student_id' => $this->student_id,
                        'yearstudy_id' => $this->yearstudies_id,
                        'classroom_id' => $this->classroom_id,
                        'tuition_id' => $tuitionfees->id,
                        'month' => $this->payment_of,
                        'receive_amount' => $this->cost,
                        'return_amount' => '0',
                        'over_amount' => '0',
                    ]
                );
            }

            $this->js('alertSuccess()');
            $this->dispatch('printbill', $invoice);
        }
    }


    // นี่คือฟังก์ชัน helper ที่คุณอาจจะต้องสร้างขึ้นมาใน class ของคุณ
    private function addMonthToArrayIfNotExists($id, $price)
    {
        // ตรวจสอบว่ามี id นี้อยู่ใน array แล้วหรือยัง
        $found = false;
        foreach ($this->arr_month as $item) {
            if ($item['id'] == $id) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $this->arr_month[] = ['id' => $id, 'price' => $price];
        }
    }

    private function removeMonthFromArray($idToRemove)
    {
        $newArrMonth = [];
        foreach ($this->arr_month as $item) {
            if ($item['id'] != $idToRemove) {
                $newArrMonth[] = $item;
            }
        }
        $this->arr_month = $newArrMonth;
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
