<?php

// namespace App\Livewire\Customers\Partial;

// use Livewire\Component;

// class CreateUpdateCustomer extends Component
// {
//     public function render()
//     {
//         return view('livewire.customers.partial.create-update-customer');
//     }
// }


namespace App\Livewire\Customers\Partial;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateUpdateCustomer extends Component
{
    public $customer_uuid, $name, $email, $contact, $whatsapp, $address, $is_active;
    public $isOpen = false;

    public function render()
    {
        return view('livewire.customers.partial.create-update-customer');
    }

    #[On('open-create-customer')]
    public function openCustomerForm()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->customer_uuid = null;
        $this->name = '';
        $this->email = '';
        $this->contact = '';
        $this->whatsapp = '';
        $this->address = '';
        $this->is_active = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Customer::updateOrCreate(['uuid' => $this->customer_uuid], [
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash(
            'message',
            $this->customer_uuid ? 'customer Updated Successfully.' : 'customer Created Successfully.'
        );

        $this->closeModal();
        $this->dispatch('refreshCustomerList');
        $this->dispatch('customer-created-updated');
    }

    public function edit($uuid)
    {
        $customer = Customer::findOrFail($uuid);
        $this->customer_uuid = $uuid;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->contact = $customer->contact;
        $this->whatsapp = $customer->whatsapp;
        $this->address = $customer->address;
        $this->is_active = $customer->is_active;

        $this->isOpen = true;
    }
}
