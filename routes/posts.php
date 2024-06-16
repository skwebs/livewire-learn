<?php

use App\Livewire\Posts\CreatePost;
use App\Livewire\Posts\EditPost;
use App\Livewire\Posts\Posts;
use App\Livewire\Posts\ShowPost;
use Illuminate\Support\Facades\Route;

// Route::get('/', Posts::class)->name('posts');

Route::group(['prefix' => 'posts', 'as' => 'posts'], function () {
    Route::get('/', Posts::class);
    Route::group(['as' => '.'], function () {
        Route::get('/create', CreatePost::class)->name('create');
        Route::get('/show/{post}', ShowPost::class)->name('show');
        Route::get('/edit/{post}', EditPost::class)->name('edit');
    });
});
