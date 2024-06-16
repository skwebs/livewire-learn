<?php

namespace App\Livewire\Transactions;

use App\Models\Transaction;
use Livewire\Attributes\On;
use Livewire\Component;

class DebitTransaction extends Component
{

    public $amount;
    public $date;
    public $customer_uuid;
    public $transaction_uuid;

    // = date('Y-m-d H:i:s', time());


    public function mount()
    {
        $this->date = date('Y-m-d', time());
    }

    public function store()
    {

        // dd($this);
        $this->validate([
            'amount' => 'required|numeric',
            'date' => 'required',
        ]);

        Transaction::updateOrCreate(['uuid' => $this->transaction_uuid], [
            'customer_uuid' => $this->customer_uuid,
            'amount' => $this->amount,
            'date' => $this->date,
            'type' => 'debit',
        ]);

        session()->flash(
            'message',
            $this->customer_uuid ? 'Customer Updated Successfully.' : 'Customer Created Successfully.'
        );

        $this->reset('amount');

        $this->dispatch('render-txn-list');
        $this->dispatch('close-txn-modal');
    }



    #[On('open-debit-modal')]
    public function openDebitTxnModal()
    {
        dd(date('Y-m-d H:i:s', time()));
    }
    public function render()
    {
        return view('livewire.transactions.debit-transaction');
    }
}
