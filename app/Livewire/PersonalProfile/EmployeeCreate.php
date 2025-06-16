<?php

namespace App\Livewire\PersonalProfile;

use App\Models\Classroom;
use App\Models\District;
use App\Models\Educational;
use App\Models\Employee;
use App\Models\Floorstudy;
use App\Models\Province;
use App\Models\TeachingCurrent;
use App\Models\TeachingHistory;
use App\Models\Village;
use App\Models\Yearstudy;
use Livewire\Component;

class EmployeeCreate extends Component
{
    protected $listeners = [
        'EducationDelete' => 'deleteEducation',
        'HistoryDelete' => 'deleteHistory',
    ];
    public $araryEthnic = [
        'ລາວ',
        'ມົ້ງ',
        'ກືມມຸ',
        'ໄຕ',
        'ອາຄາ',
        'ແຊກ',
        'ຍວນ',
        'ໄທເໜືອ',
        'ຜູ້ໄທ',
        'ຢັ້ງ',
        'ລື້',
        'ກະຕາງ',
        'ກະຕູ',
        'ກຣຽງ',
        'ກຣີ',
        'ຂະແມ',
        'ງວນ',
        'ເຈັງ',
        'ສາມຕ່າວ',
        'ສະດາງ',
        'ຊ່ວຍ',
        'ຊິງມູນ',
        'ຍະເຫີນ',
        'ຕະໂອ້ຍ',
        'ຕຣຽງ',
        'ຕຣີ',
        'ຕູມ',
        'ແທ່ນ',
        'ບິດ',
        'ເບຣົາ',
        'ປະໂກະ',
        'ໄປຣ',
        'ຜ້ອງ',
        'ມະກອງ',
        'ມ້ອຍ',
        'ຢຣູ',
        'ແຢະ',
        'ລະເມດ',
        'ລະວີ',
        'ໂອຍ',
        'ເອີດູ',
        'ຮ່າຣັກ',
        'ສິງສິລິ',
        'ສີລາ',
        'ລາຫູ',
        'ໂລໂລ',
        'ຫໍ້',
        'ຮ່າຍີ່',
        'ອີວມຽນ',
        'ບູຣ',
    ];

    public $id = 0;
    public $euId = 0;
    public $hsId = 0;
    public $update = null;
    public $provinces = [];
    public $districts = [];
    public $villages = [];
    public $floorstudy = [];
    public $classroom = [];
    public $yearstudy = [];
    public $edu_level = [];
    public $teach_history = [];
    public $village;
    public $district;
    public $province;

    public $education_level;
    public $institution_name;
    public $country;
    public $years;
    public $details;
    public $teaching_room;
    public $teaching;
    public $teaching_years;
    public $teaching_at;

    public $full_name;
    public $birthday;
    public $single;
    public $ethnic;
    public $phones;
    public $weight;
    public $height;
    public $clothes_size;
    public $position;
    public $salary;
    public $date_start;
    public $date_end;

    public function mount()
    {
        $this->id = request()->route('id', 0);
        $this->update = request()->route('update', null);
    }
    public function render()
    {
        $this->provinces = Province::all();
        $this->floorstudy = Floorstudy::all();
        $this->yearstudy = Yearstudy::all();
        $this->classroom = Classroom::all();
        if ($this->id) {
            $employee = Employee::find($this->id);
            if ($employee) {
                $this->full_name = $employee->full_name;
                $this->birthday = $employee->birthday;
                $this->single = $employee->single;
                $this->ethnic = $employee->ethnic;
                $this->phones = $employee->phones;
                $this->weight = $employee->weight;
                $this->height = $employee->height;
                $this->clothes_size = $employee->clothes_size;
                $this->province = $employee->province;
                $this->districts = District::where('province_id', $employee->province)->get();
                $this->district = $employee->district;
                $this->villages = Village::where('district_id', $employee->district)->get();
                $this->village = $employee->village;
            }
            $teachingCurrent = TeachingCurrent::where('employee_id', $this->id)->first();
            if ($teachingCurrent) {
                $this->position = $teachingCurrent->position;
                $this->salary = $teachingCurrent->salary;
                $this->date_start = $teachingCurrent->date_start;
                $this->date_end = $teachingCurrent->date_end;
            }
            $this->teach_history = TeachingHistory::with(['yearstudy', 'teachingRoom'])->where('employee_id', $this->id)->get();
            $this->edu_level = Educational::with(['yearstudy', 'floor'])->where('employee_id', $this->id)->get();
            // dd($this->teach_history);
        }
        return view('livewire.personal-profile.employee-create');
    }
    public function getDistrict($provinceId)
    {
        $this->districts = District::where('province_id', $provinceId)->get();
        // $this->village = Village::with('district') // use correct relation name
        //     ->whereHas('district', function ($query) use ($provinceId) {
        //         $query->where('province_id', $provinceId);
        //     })
        //     ->get();
    }
    public function getVillage($DistrictId)
    {
        $this->villages = Village::where('district_id', $DistrictId)->get();
    }
    public function saveEduLevel()
    {
        $this->validate([
            'education_level'    => ['required', 'string'],
            'institution_name'     => ['required', 'string'],
            'country'      => ['required', 'string'],
            'years'        => ['required', 'string'],
            'details'        => ['required', 'string'],
        ]);
        $this->edu_level[] = [
            'education_level'  => $this->education_level,
            'education_name'  => Floorstudy::find($this->education_level)->name,
            'institution_name'   => $this->institution_name,
            'country'   => $this->country,
            'years'  => $this->years,
            'details'   => $this->details,
        ];
        $this->js('alertUpSuccess()');
    }
    public function unsetEducational($index)
    {
        unset($this->edu_level[$index]);
        $this->edu_level = array_values($this->edu_level); // Re-index the array
        $this->js('alertDelete()');
    }
    public function savetechHistory()
    {
        $this->validate([
            'teaching_room'    => ['required', 'string'],
            'teaching'     => ['required', 'string'],
            'teaching_years'      => ['required', 'string'],
            'teaching_at'        => ['required', 'string'],
        ]);
        $this->teach_history[] = [
            'teaching_room'  => $this->teaching_room,
            'teaching_room_name'  => Classroom::find($this->teaching_room)->name,
            'teaching'   => $this->teaching,
            'teaching_years'   => $this->teaching_years,
            'teaching_at'   => $this->teaching_at,
        ];
        // dd($this->teach_history);
        $this->js('alertSuccess()');
    }
    public function unsetTeachHistory($index)
    {
        unset($this->teach_history[$index]);
        $this->teach_history = array_values($this->teach_history); // Re-index the array
        $this->js('alertDelete()');
    }
    public function saveEmployee()
    {
        $validate = $this->validate([
            'full_name'    => ['required', 'string'],
            'birthday'     => ['required', 'date'],
            'single'      => ['required', 'string'],
            'ethnic'        => ['required', 'string'],
            'phones'    => ['required', 'string'],
            'weight'   => ['required', 'integer'],
            'height'   => ['required', 'integer'],
            'clothes_size'   => ['required', 'string'],
            'province'   => ['required', 'integer'],
            'district'   => ['required', 'integer'],
            'village'   => ['required', 'integer'],
        ]);
        $validate2 = $this->validate([
            'position'    => ['required', 'string'],
            'salary'    => ['required', 'string'],
        ]);
        // dd($validate2);
        if (!$this->date_start) {
            $this->date_start = null;
        }
        if (!$this->date_end) {
            $this->date_end = null;
        }

        $employeeData = Employee::create($validate);

        if ($employeeData) {
            TeachingCurrent::create($validate2 + ['employee_id' => $employeeData->id, 'date_start' => $this->date_start, 'date_end' => $this->date_end]);
            foreach ($this->teach_history as $teach) {
                TeachingHistory::create($teach + ['employee_id' => $employeeData->id]);
            }
            foreach ($this->edu_level as $edu) {
                Educational::create($edu + ['employee_id' => $employeeData->id]);
            }
            $this->js('alertSuccess()');
        } else {
            $this->js('alertError()');
            return;
        }
    }
    public function updateEduLevel()
    {
        $validate = $this->validate([
            'education_level'    => ['required', 'string'],
            'institution_name'     => ['required', 'string'],
            'country'      => ['required', 'string'],
            'years'        => ['required', 'string'],
            'details'        => ['required', 'string'],
        ]);
        $educational = Educational::create(['employee_id' => $this->id] + $validate);
        if ($educational) {
            $this->js('alertSuccess()');
        } else {
            $this->js('alertError()');
        }
    }
    public function updatetechHistory()
    {
        $validate = $this->validate([
            'teaching_room'    => ['required', 'string'],
            'teaching'     => ['required', 'string'],
            'teaching_years'      => ['required', 'string'],
            'teaching_at'        => ['required', 'string'],
        ]);
        $teachhis = TeachingHistory::create(['employee_id' => $this->id] + $validate);
        if ($teachhis) {
            $this->js('alertSuccess()');
        } else {
            $this->js('alertError()');
        }
    }

    public function updateEmployee()
    {
        $validate = $this->validate([
            'full_name'    => ['required', 'string'],
            'birthday'     => ['required', 'date'],
            'single'      => ['required', 'string'],
            'ethnic'        => ['required', 'string'],
            'phones'    => ['required', 'string'],
            'weight'   => ['required', 'integer'],
            'height'   => ['required', 'integer'],
            'clothes_size'   => ['required', 'string'],
            'province'   => ['required', 'integer'],
            'district'   => ['required', 'integer'],
            'village'   => ['required', 'integer'],
        ]);
        $validate2 = $this->validate([
            'position'    => ['required', 'string'],
            'salary'    => ['required', 'string'],
        ]);
        if (!$this->date_start) {
            $this->date_start = null;
        }
        if (!$this->date_end) {
            $this->date_end = null;
        }
        $employ = Employee::where('id', $this->id)->update($validate);
        TeachingCurrent::where('employee_id', $this->id)->update($validate2 + ['date_start' => $this->date_start, 'date_end' => $this->date_end]);
        if ($employ) {
            $this->js('alertUpSuccess()');
        } else {
            $this->js('alertError()');
            return;
        }
    }
    public function deleteEducation()
    {
        $educational = Educational::find($this->euId);
        if ($educational) {
            $educational->delete();
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
    public function deleteHistory()
    {
        $educational = TeachingHistory::find($this->hsId);
        if ($educational) {
            $educational->delete();
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }
    public function onModalShow()
    {
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }
    public function onModalShowHistory()
    {

        $this->js("modalShowHistory()");
    }
    public function onModalCloseHistory()
    {
        $this->js("modalcloseHistory()");
    }
    public function onModalEdit($id)
    {
        $this->js("modalShow()");
    }
}
