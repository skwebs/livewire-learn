<?php

use App\Livewire\Customers\CustomersList;
use App\Livewire\HomePage;
use App\Livewire\Students\Students;
use App\Livewire\TestDispatch;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/test', TestDispatch::class)->name('test');
// Route::get('/', TestDispatch::class)->name('test');
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/students', Students::class)->name('students');
// Route::get('/customers', CustomersList::class)->name('customers.list');
// require __DIR__ . '/students.php';
require __DIR__ . '/customers.php';
require __DIR__ . '/posts.php';
