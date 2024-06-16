<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title("Home Page")]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
