<?php

use App\Livewire\Customers\CustomerDetails;
use App\Livewire\Customers\CustomersList;
use App\Livewire\Customers\ShowCustomer;
use Illuminate\Support\Facades\Route;

// Route::get('/', Posts::class)->name('posts');

Route::group(['prefix' => 'c', 'as' => 'customers.'], function () {
    Route::get('/', CustomersList::class)->name('list');
    Route::get('/show/{customer}', ShowCustomer::class)->name('show');
    Route::get('/t/{customer}', CustomerDetails::class)->name('txn');
    // Route::group(['as' => '.'], function () {
    //     Route::get('/create', CreatePost::class)->name('create');
    //     Route::get('/edit/{post}', EditPost::class)->name('edit');
    // });
});
