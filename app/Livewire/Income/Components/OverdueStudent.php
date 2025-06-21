<?php

namespace App\Livewire\Income\Components;

use App\Models\Classroom;
use App\Models\Student;
use Livewire\Component;

class OverdueStudent extends Component
{
    public $students_list = 0;
    public $classroomData = [];
    public $studentroomData = [];
    public function render()
    {
        $this->classroomData = Classroom::with('countstudent')->get();
        return view('livewire.income.Components.overdue-student');
    }

    public function onClickTable($id, $classid)
    {
        $this->students_list = $id;
        $this->studentroomData = [];
        if ($classid > 0) {
            $studentroomData = Student::with(['studentclass', 'tuitionfees']);
            $studentroomData->whereHas('studentclass', function ($querry) use ($classid) {
                $querry->where('classrooms_id', $classid)->where('status', 1);
            });
            $this->studentroomData = $studentroomData->get();
        }
    }
}
