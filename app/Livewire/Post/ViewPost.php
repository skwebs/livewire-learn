<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ViewPost extends Component
{

    public $post;
    function mount(Post $post)
    {
        // dd($post);
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.posts.view-post');
    }
}
