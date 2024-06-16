<?php

// use App\Livewire\Customers\CustomerDetails;
use App\Livewire\Customers\CustomersList;
use App\Livewire\Customers\ShowCustomer;
use App\Livewire\Transactions\Transactions;
use Illuminate\Support\Facades\Route;

// Route::get('/', Posts::class)->name('posts');

Route::group(['prefix' => 'c', 'as' => 'customers.'], function () {
    Route::get('/', CustomersList::class)->name('list');
    Route::get('/{customer}', ShowCustomer::class)->name('show');
    Route::get('/t/{customer}', Transactions::class)->name('txn');
    // Route::group(['as' => '.'], function () {
    //     Route::get('/create', CreatePost::class)->name('create');
    //     Route::get('/edit/{post}', EditPost::class)->name('edit');
    // });
});
