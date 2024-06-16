<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class CustomersModal extends Component
{

    public $customer_uuid, $name, $email, $contact, $whatsapp, $address, $is_active;



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

    // public function store()
    // {
    //     dd($this);
    // }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'whatsapp' => 'nullable',
            'address' => 'required',
        ]);

        Customer::updateOrCreate(['uuid' => $this->customer_uuid], [
            'name' => $this->name,
            'email' => $this->email,
            'contact' => $this->contact,
            'whatsapp' => $this->whatsapp,
            'address' => $this->address,
        ]);

        session()->flash(
            'message',
            $this->customer_uuid ? 'Customer Updated Successfully.' : 'Customer Created Successfully.'
        );

        $this->reset();
        $this->close();
        $this->dispatch('render-customer-list');
        $this->dispatch('customer-created');
    }

    public function close()
    {
        $this->dispatch('modal-close');
    }

    public function render()
    {
        return view('livewire.customers.customers-modal');
    }
}
