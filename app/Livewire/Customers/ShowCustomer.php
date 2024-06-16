<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class ShowCustomer extends Component
{

    public Customer $customer;

    public function render()
    {
        return view('livewire.customers.show-customer');
    }
}