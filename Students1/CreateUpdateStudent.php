<?php

namespace App\Livewire\Students1;

use Livewire\Component;

class CreateUpdateStudent extends Component
{
    public $student_id;



    public function render()
    {
        return view('livewire.students.create-update-student');
    }
}
