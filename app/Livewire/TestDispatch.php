<?php

namespace App\Livewire;

use Livewire\Component;

class TestDispatch extends Component
{


    public $input;
    public function test()
    {
        $this->dispatch('test-listener', ['v' => $this->input]);
    }
    public function render()
    {
        return view('livewire.test-dispatch');
    }
}
