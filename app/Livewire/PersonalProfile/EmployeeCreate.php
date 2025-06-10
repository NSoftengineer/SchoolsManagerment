<?php

namespace App\Livewire\PersonalProfile;

use App\Models\District;
use App\Models\Floorstudy;
use App\Models\Province;
use App\Models\Village;
use App\Models\Yearstudy;
use Livewire\Component;

class EmployeeCreate extends Component
{
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
    public $update = null;
    public $provinces = [];
    public $districts = [];
    public $villages = [];
    public $floorstudy = [];
    public $yearstudy = [];
    public $edu_level = [];
    public $tech_history = [];
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

    public function render()
    {
        $this->provinces = Province::all();
        $this->floorstudy = Floorstudy::all();
        $this->yearstudy = Yearstudy::all();
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
            'institution_name'   => $this->institution_name,
            'country'   => $this->country,
            'years'  => $this->years,
            'details'   => $this->details,
        ];
        $this->js('alertUpSuccess()');
    }
    public function savetechHistory()
    {
        $this->validate([
            'teaching_room'    => ['required', 'string'],
            'teaching'     => ['required', 'string'],
            'teaching_years'      => ['required', 'string'],
            'teaching_at'        => ['required', 'string'],
        ]);
        $this->tech_history[] = [
            'teaching_room'  => $this->teaching_room,
            'teaching'   => $this->teaching,
            'teaching_years'   => $this->teaching_years,
            'teaching_at'   => $this->teaching_at,
        ];
        // dd($this->tech_history);
        $this->js('alertSuccess()');
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
            'clothes_size'   => ['required', 'integer'],
            'province'   => ['required', 'integer'],
            'district'   => ['required', 'integer'],
            'village'   => ['required', 'integer'],

            'position'    => ['required', 'string'],
            'salary'    => ['required', 'string'],
            'date_start'    => ['required', 'date'],
            'date_end'    => ['required', 'date'],
        ]);
        $this->js('alertSuccess()');
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
