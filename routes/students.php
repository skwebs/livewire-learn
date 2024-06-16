<?php



use App\Livewire\Students\Students;
use Illuminate\Support\Facades\Route;

// Route::get('/', Posts::class)->name('posts');

Route::group(['prefix' => 'students', 'as' => 'students'], function () {
    Route::get('/', Students::class);
    // Route::group(['as' => '.'], function () {
    //     Route::get('/create', CreatePost::class)->name('create');
    //     Route::get('/show/{post}', ShowPost::class)->name('show');
    //     Route::get('/edit/{post}', EditPost::class)->name('edit');
    // });
});