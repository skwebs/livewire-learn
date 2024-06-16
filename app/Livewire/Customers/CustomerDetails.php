<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class CustomerDetails extends Component
{



    // {
    public $customer;
    public $transactionsWithAmounts = [];
    public $totalGiven = 0;
    public $totalTaken = 0;
    public $balance = 0;

    protected $listeners = [
        'refreshCustomerTotals' => 'calculateTotals'
    ];

    public function mount(Customer $customer)
    {
        // dd($customer);
        $this->customer = $customer;
        $this->calculateTotals();
    }

    public function calculateTotals()
    {
        // Fetch transactions with eager loading
        $transactions = $this->customer->transactions()
            ->select('amount', 'type', 'created_at')
            ->orderBy('created_at')
            ->get()
            ->map(function ($transaction) {
                return [
                    'amount' => $transaction->amount,
                    'type' => $transaction->type,
                    'created_at' => $transaction->created_at,
                ];
            });

        // Calculate totals and running balance
        $this->totalGiven = 0;
        $this->totalTaken = 0;
        $runningBalance = 0;

        $this->transactionsWithAmounts = $transactions->map(function ($transaction) use (&$runningBalance) {
            $given = $transaction['type'] === 'give' ? $transaction['amount'] : 0;
            $taken = $transaction['type'] === 'take' ? $transaction['amount'] : 0;
            $runningBalance += $given - $taken;

            $this->totalGiven += $given;
            $this->totalTaken += $taken;

            return [
                'customer' => $this->customer,
                'given' => $given,
                'taken' => $taken,
                'balance' => $runningBalance,
                'type' => $transaction['type'],
                'created_at' => $transaction['created_at'],

            ];
        });

        $this->balance = $runningBalance;

        // dd($this->transactionsWithAmounts);
        $this->dispatch('transactionsUpdated');
    }


    #[Title('Customers List')]
    #[On('refreshCustomerList')]
    public function render()
    {
        return view('livewire.customers.customer-details');
    }
}
