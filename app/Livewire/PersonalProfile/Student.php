<?php

namespace App\Livewire\PersonalProfile;

use App\Models\Classroom;
use App\Models\District;
use App\Models\Province;
use App\Models\Student as ModelsStudent;
use App\Models\StudentClass;
use App\Models\Village;
use App\Models\Yearstudy;
use GuzzleHttp\Promise\Create;
use Livewire\Component;

class Student extends Component
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

    public $studentData = [];

    public $province = [];
    public $selectedprovince;
    public $district = [];
    public $selecteddistrict;
    public $village = [];
    public $selectedvillage;
    public $classroom = [];
    public $yearstudy = [];


    public $isIdStudent = 0;
    public $isIdStudentClass = 0;
    public $first_name;
    public $last_name;
    public $birthday;
    public $ethnic;
    public $village_id;
    public $district_id;
    public $province_id;
    public $mother;
    public $m_phone;
    public $m_occupation;
    public $father;
    public $f_phone;
    public $f_occupation;
    public $class_id;
    public $yearstudy_id;
    public function render()
    {

        $this->province = Province::all();
        if ($this->province_id != "") {
            $this->district = District::where('province_id', $this->province_id)->get();
        }
        if ($this->district_id != "") {
            $this->village = Village::where('district_id', $this->district_id)->get();
        }

        $this->classroom = Classroom::all();
        $this->yearstudy = Yearstudy::orderBy('id', 'desc')->get();

        $this->studentData = ModelsStudent::with(['studentclass'])->get();
        return view('livewire.personal-profile.student');
    }

    public function saveStudent()
    {
        $validate = $this->validate([
            'first_name'    => ['required', 'string'],
            'last_name'     => ['required', 'string'],
            'birthday'      => ['required', 'date'],
            'ethnic'        => ['required', 'string'],
            'village_id'    => ['required', 'integer'],
            'district_id'   => ['required', 'integer'],
            'province_id'   => ['required', 'integer'],
            'mother'        => ['required', 'string'],
            'm_phone'       => ['required', 'string'],
            'm_occupation'  => ['required', 'string'],
            'father'        => ['required', 'string'],
            'f_phone'       => ['required', 'string'],
            'f_occupation'  => ['required', 'string'],
            'class_id'      => ['required', 'integer'],
            'yearstudy_id'  => ['required', 'integer'],
        ]);

        $ModelsStudent = ModelsStudent::create($validate);
        if ($ModelsStudent) {
            StudentClass::create([
                "student_id" => $ModelsStudent->id,
                "yearstudies_id" => $this->yearstudy_id,
                "classrooms_id" => $this->class_id,
                "status" => "1",
            ]);






            $this->first_name = "";
            $this->last_name = "";
            $this->birthday = "";
            $this->ethnic = "";
            $this->village_id = "";
            $this->district_id = "";
            $this->province_id = "";
            $this->mother = "";
            $this->m_phone = "";
            $this->m_occupation = "";
            $this->father = "";
            $this->f_phone = "";
            $this->f_occupation = "";
            $this->js('alertSuccess()');
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
    public function onModalShowSearch()
    {
        $this->js("modalShowSearch()");
    }
    public function onModalCloseSearch()
    {
        $this->js("modalcloseSearch()");
    }
}
