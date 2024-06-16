<?php

namespace App\Livewire\Customers;

use Livewire\Attributes\On;
use Livewire\Component;

class CustomersModal extends Component
{

    // public $isOpen = false;

    // #[On('open-customer-modal')]
    // public function openCustomerModal()
    // {
    //     $this->isOpen = true;
    // }
    // #[On('close-customer-modal')]
    // public function closeCustomerModal()
    // {
    //     $this->isOpen = false;
    // }

    public function close()
    {
        $this->dispatch('modal-close');
    }

    public function render()
    {
        return view('livewire.customers.customers-modal');
    }
}
