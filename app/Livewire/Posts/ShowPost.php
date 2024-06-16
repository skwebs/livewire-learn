<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;
    function mount(Post $post)
    {
        // dd($post);
        $this->post = $post;
    }

    public function delete(Post $post)
    {
        $post->delete();

        return $this->redirect(route('posts'), navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.show-post');
    }
}
