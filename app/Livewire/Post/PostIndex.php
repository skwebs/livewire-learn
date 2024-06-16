<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{

    use WithPagination;
    public $posts = array();

    function mount()
    {
        $this->posts = Post::all();
        // $this->posts = Post::paginate(10);
    }

    public function delete(Post $post)
    {
        $post->delete();

        $this->redirectRoute('post.index');
    }

    public function render()
    {
        return view('livewire.posts.post-index');
        // return view('livewire.posts.post-index', [
        //     'posts' => Post::paginate(10),
        // ]);
    }
}
