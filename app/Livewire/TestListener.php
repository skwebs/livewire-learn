<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class TestListener extends Component
{

    #[On('test-listener')]
    public function TestListener($v)
    {


        dd($v);
    }
    public function render()
    {
        return view('livewire.test-listener');
    }
}
