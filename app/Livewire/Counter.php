<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $todo = "";

    public $title = "";
    public $content = "";

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function save()
    {

        // dd($this->title);
        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect()->to('/posts')
            ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}