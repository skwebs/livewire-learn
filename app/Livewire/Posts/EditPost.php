<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditPost extends Component
{

    public $post;

    #[Rule('required|min:3')]
    public $title = "";

    #[Rule('required|min:10')]
    public $content = "";

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function update()
    {
        $this->validate();
        $this->post->update($this->only('title', 'content'));

        return $this->redirect(route('posts'), navigate: true);
    }
    public function render()
    {
        return view('livewire.posts.edit-post');
    }
}
