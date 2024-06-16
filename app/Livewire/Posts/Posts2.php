<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class Posts extends Component
{
    public $posts = [];
    public $isModalOpen = false;
    public $title;

    public function mount()
    {
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $this->posts = Post::all();
    }

    #[On('toggle-modal')]
    public function toggleModal()
    {
        $this->loadPosts();
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function save()
    {
        Post::create([
            'title' => $this->title,
        ]);
        $this->loadPosts();
        $this->toggleModal();
    }

    public function delete(Post $post)
    {
        $post->delete();
        $this->loadPosts();
        return $this->redirect(route('posts'), navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.posts');
    }
}
