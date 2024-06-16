<?php

namespace App\Livewire\Posts\Partial;

use App\Models\Post;
use Livewire\Component;

class PostItem extends Component
{

    public $post;

    // function mount($post)
    // {
    //     $this->post = $post;
    // }
    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.posts.partial.post-item');
    }
}
