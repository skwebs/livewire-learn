<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostItem extends Component
{

    public $post = null;

    function mount($post)
    {
        $this->post = $post;
    }

    public function delete($id)
    {
        dd($id);
    }
    public function render()
    {
        return view('livewire.posts.post-item');
    }
}
