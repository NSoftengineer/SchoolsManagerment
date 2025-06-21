<?php

namespace App\Livewire\PersonalProfile;

use App\Models\Classroom;
use App\Models\District;
use App\Models\Province;
use App\Models\Student as ModelsStudent;
use App\Models\StudentClass;
use App\Models\Typeexpenses;
use App\Models\Village;
use App\Models\Yearstudy;
use Livewire\Component;
use Livewire\WithFileUploads;

class Student extends Component
{
    use WithFileUploads;

    protected $listeners = ['studentDelete' => 'deleteStudent'];
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

    public $isId;
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
    public $address;
    public $photo;
    public $show_photo;
    public function render()
    {

        $this->province = Province::all();
        // if ($this->province_id != "") {
        //     $this->district = District::where('province_id', $this->province_id)->get();
        // }
        // if ($this->district_id != "") {
        //     $this->village = Village::where('district_id', $this->district_id)->get();
        // }

        $this->classroom = Classroom::all();
        $this->yearstudy = Yearstudy::orderBy('id', 'desc')->get();

        $this->studentData = ModelsStudent::with(['studentclass', 'province', 'district', 'village'])->get();
        $type_expenses = Typeexpenses::all();
        return view('livewire.personal-profile.student')->layout('components.layouts.app', [
            'type_expenses' => $type_expenses
        ]);
    }
    public function getDistrict($provinceId)
    {
        $this->district = District::where('province_id', $provinceId)->get();
        // $this->village = Village::with('district') // use correct relation name
        //     ->whereHas('district', function ($query) use ($provinceId) {
        //         $query->where('province_id', $provinceId);
        //     })
        //     ->get();
    }
    public function getVillage($DistrictId)
    {
        $this->village = Village::where('district_id', $DistrictId)->get();
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
            'address'       => ['nullable', 'string'],
        ]);
        if ($this->isIdStudent) {
            $ModelsStudent = ModelsStudent::find($this->isIdStudent);
            if ($ModelsStudent) {
                $data_photo = [];

                if ($this->photo != "") {
                    $name = $ModelsStudent->id . '_' . uniqid() . '_' . $this->photo->hashName();
                    $uploaded = $this->photo->storeAs('/students', $name, 'local_public');
                    $data_photo['img'] = $uploaded;
                }

                $ModelsStudent->update(array_merge($validate, $data_photo));

                // $StudentClass = StudentClass::find($this->isIdStudent);
                $StudentClass = StudentClass::where('student_id', $this->isIdStudent)
                    ->where('yearstudies_id', $this->yearstudy_id)
                    ->where('status', '1')
                    ->where('classrooms_id', $this->class_id)
                    ->first();
                if ($StudentClass != null) {
                    $StudentClass->update([
                        "yearstudies_id" => $this->yearstudy_id,
                        "classrooms_id" => $this->class_id,
                    ]);
                } else {
                    $UpdateStudentClass = StudentClass::where('student_id', $this->isIdStudent)->update(["status" => "2"]);
                    StudentClass::create([
                        "student_id" => $this->isIdStudent,
                        "yearstudies_id" => $this->yearstudy_id,
                        "classrooms_id" => $this->class_id,
                        "status" => "1",
                    ]);
                }
                $this->js('alertUpSuccess()');
            } else {
                $this->js('alertError()');
                return;
            }
        } else {
            $ModelsStudent = ModelsStudent::create($validate);
            if ($ModelsStudent) {
                StudentClass::create([
                    "student_id" => $ModelsStudent->id,
                    "yearstudies_id" => $this->yearstudy_id,
                    "classrooms_id" => $this->class_id,
                    "status" => "1",
                ]);

                if ($this->photo != "") {
                    // $name = $ModelsStudent->id . '_' . uniqid() . '_' . $this->photo->getClientOriginalName();
                    $name = $ModelsStudent->id . '_' . uniqid() . '_' . $this->photo->hashName();
                    $uploaded = $this->photo->storeAs('/students', $name, 'local_public');
                    ModelsStudent::find($ModelsStudent->id)->update(['img' => $uploaded]);
                }



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
    }
    public function deleteStudent()
    {
        $student = ModelsStudent::find($this->isId);
        if ($student) {
            $student->delete();
            $studentClass = StudentClass::where('student_id', $this->isId)->first();
            if ($studentClass) {
                $studentClass->delete();
            }
            $this->isId = false;
            $this->js('alertDelete()');
        } else {
            $this->js('alertError()');
        }
    }

    public function onModalShow()
    {
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
    public function onModalEdit($id)
    {
        $student = ModelsStudent::find($id);
        if ($student) {
            $this->isIdStudent = $student->id;
            $this->first_name = $student->first_name;
            $this->last_name = $student->last_name;
            $this->birthday = $student->birthday;
            $this->ethnic = $student->ethnic;
            $this->province_id = $student->province_id;
            $this->show_photo = $student->img;
            $this->district = District::where('province_id', $student->province_id)->get();
            if ($student->district_id) {
                $this->village = Village::where('district_id',  $student->district_id)->get();
                $this->district_id = $student->district_id;
            } else {
                $this->village = [];
            }
            if ($student->village_id) {
                $this->village_id = $student->village_id;
            } else {
                $this->village_id = null;
            }
            $this->mother = $student->mother;
            $this->m_phone = $student->m_phone;
            $this->m_occupation = $student->m_occupation;
            $this->father = $student->father;
            $this->f_phone = $student->f_phone;
            $this->f_occupation = $student->f_occupation;
            $this->mother = $student->mother;
            $this->m_phone = $student->m_phone;
            $this->m_occupation = $student->m_occupation;

            $this->class_id = $student->studentclass->classrooms_id;
            $this->yearstudy_id = $student->studentclass->yearstudies_id;
        }
        $this->js("modalShow()");
    }
}
