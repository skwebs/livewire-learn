<?php

namespace App\Livewire\Students;

use Livewire\Component;
use App\Models\Student;
use Livewire\Attributes\On;

class CreateUpdateStudent extends Component
{
    public $student_id, $name, $email;
    public $isOpen = false;

    // protected $listeners = [
    //     // 'openModal' => 'openModal',
    //     // 'edit-student' => 'edit'
    // ];

    public function render()
    {
        return view('livewire.students.create-update-student');
    }


    #[On('openModals')]
    #[On('testCustomer')]
    public function openModal()
    {
        $this->resetInputFields();
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->student_id = null;
        $this->name = '';
        $this->email = '';
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
        $this->dispatch('refreshStudentList');
        $this->dispatch('student-created-updated');
    }

    #[On('edit-student')]
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;

        $this->isOpen = true;
    }
}
