<?php




namespace App\Livewire\Students;

use Livewire\Component;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

class Students extends Component
{
    public $students;

    // protected $listeners = [
    //     'refreshStudentList' => '$refresh'
    // ];

    #[Title('Student List')]
    #[On('refreshStudentList')]
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.students.students');
    }

    public function create()
    {
        $this->dispatch('openModals');
    }

    public function edit($id)
    {
        $this->dispatch('edit-student', $id);
    }

    public function delete(Student $student)
    {
        $student->delete();
        session()->flash('message', 'Student Deleted Successfully.');
        $this->dispatch('student-deleted');
    }
}
