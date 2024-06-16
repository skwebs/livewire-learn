<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class Posts extends Component
{
    public $posts = array();
    public $title, $content;
    public $isModalOpen = false;

    public function render()
    {
        return view('livewire.posts.posts');
    }

    public function save()
    {
        $post = Post::create([
            'title' => $this->title
        ]);
    }

    #[On('toggle-modal')]
    function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
        // return $this->redirect(route('posts'), navigate: true);
    }
    // function mount()
    // {
    //     $this->posts = Post::all();
    // }




    // public function delete(Post $post)
    // {
    //     $post->delete();

    //     return $this->redirect(route('posts'), navigate: true);
    // }
}