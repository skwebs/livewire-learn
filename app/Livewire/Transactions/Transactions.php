<?php

namespace App\Livewire\Transactions;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Transactions extends Component
{


    public $isOpen;
    public $isOpenDebit;
    public $isOpenCredit;
    public $customer;
    public $transactionsWithAmounts = [];
    public $totalGiven = 0;
    public $totalTaken = 0;
    public $balance = 0;


    #[On('open-txn-modal')]
    public function openTxnModal($t)
    {
        if ($t === "debit") {
            $this->isOpenDebit = true;
        } else {
            $this->isOpenCredit = true;
        }
    }
    #[On('close-txn-modal')]
    public function closeTxnModal()
    {
        $this->isOpenDebit = false;
        $this->isOpenCredit = false;
    }

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->calculateTotals();
    }

    public function calculateTotals()
    {
        // Fetch transactions with eager loading
        $transactions = $this->customer->transactions()
            ->select('amount', 'type', 'date')
            ->orderBy('date')
            ->orderBy('created_at')
            ->get()
            ->map(function ($transaction) {
                return [
                    'amount' => $transaction->amount,
                    'type' => $transaction->type,
                    'date' => $transaction->date,
                ];
            });

        // Calculate totals and running balance
        $this->totalGiven = 0;
        $this->totalTaken = 0;
        $runningBalance = 0;

        $this->transactionsWithAmounts = $transactions->map(function ($transaction) use (&$runningBalance) {
            $given = $transaction['type'] === 'debit' ? $transaction['amount'] : 0;
            $taken = $transaction['type'] === 'credit' ? $transaction['amount'] : 0;
            $runningBalance += $given - $taken;

            $this->totalGiven += $given;
            $this->totalTaken += $taken;

            return [
                'customer' => $this->customer,
                'given' => $given,
                'taken' => $taken,
                'balance' => $runningBalance,
                'type' => $transaction['type'],
                'date' => date('d-m-Y', strtotime($transaction['date'])),

            ];
        });

        $this->balance = $runningBalance;

        $this->dispatch('transactionsUpdated');
    }


    #[Title('Transactions ')]
    #[On('render-txn-list')]
    public function render()
    {
        $this->calculateTotals();
        return view('livewire.transactions.transactions');
    }
}
