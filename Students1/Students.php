<?php

namespace App\Livewire\Students1;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $students;
    public $name, $email, $student_id;
    public $isOpen = 0;


    public function render()
    {
        $this->students = Student::all();
        return view('livewire.students.students');
    }
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->student_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash(
            'message',
            $this->student_id ? 'Student Updated Successfully.' : 'Student Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;

        $this->openModal();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Student Deleted Successfully.');
    }
}
