<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowCustomer extends Component
{

    public Customer $customer;
    #[Title("Customer Details")]
    public function render()
    {
        return view('livewire.customers.show-customer');
    }
}
