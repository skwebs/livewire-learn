<?php

use App\Livewire\Counter;
use App\Livewire\Index;

use App\Livewire\Posts\CreatePost;

use App\Livewire\Posts\PostCreate;
use App\Livewire\Posts\PostEdit;
use App\Livewire\Posts\PostIndex;
use App\Livewire\Posts\PostUpdate;
use App\Livewire\Posts\PostView;
use App\Livewire\Posts\Update;
use App\Livewire\Posts\ViewPost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Index::class)->name('index');
// Route::get('/create-post', CreatePost::class)->name('post.create-post');
// Route::get('/view-post/{post}', ViewPost::class)->name('post.view-post');

Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
    Route::get('/', PostIndex::class)->name('index');
    Route::get('/create', PostCreate::class)->name('create');
    Route::get('/view/{post}', PostView::class)->name('view');
    Route::get('/edit/{post}', PostEdit::class)->name('edit');
    // Route::get('/delete/{post}', Update::class)->name('delete');
});


Route::get('/counter', Counter::class);
