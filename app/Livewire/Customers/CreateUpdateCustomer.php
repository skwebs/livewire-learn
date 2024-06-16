<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CreateUpdateCustomer extends Component
{
    public $customer_id, $name, $email;
    public $isOpen = false;


    public function render()
    {
        return view('livewire.customers.create-update-customer');
    }

    public function openCustomerModal()
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
        $this->customer_id = null;
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Customer::updateOrCreate(['id' => $this->customer_id], [
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash(
            'message',
            $this->customer_id ? 'Customer Updated Successfully.' : 'Customer Created Successfully.'
        );

        $this->closeModal();
        $this->dispatch('refreshCustomerList');
        $this->dispatch('customer-created-updated');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $this->customer_id = $id;
        $this->name = $customer->name;
        $this->email = $customer->email;

        $this->isOpen = true;
    }
}
