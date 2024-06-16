<?php

namespace App\Livewire\Customers\Partial;

use Livewire\Component;

class CustomerItem extends Component
{
    public $customer;
    public function render()
    {
        return view('livewire.customers.partial.customer-item');
    }
}