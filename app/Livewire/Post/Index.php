<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{

    public $posts = array();

    function mount()
    {
        $this->posts = Post::all();
    }

    public function save()
    {
        $post = Post::create([
            'title' => $this->title
        ]);

        return redirect()->to('/posts')
            ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.posts.index');
    }
}
