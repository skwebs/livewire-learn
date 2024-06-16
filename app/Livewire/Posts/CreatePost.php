<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePost extends Component
{

    #[Rule('required|min:3')]
    public $title = "";

    #[Rule('required|min:10')]
    public $content = "";

    public function save()
    {

        $this->validate();

        $post = Post::create($this->only('title', 'content'));

        // $post = Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);

        $this->reset(['title', 'content']); // Clear form fields for new entry

        // $this->redirectRoute('post.index');
        // $url = route('post.index');
        return $this->redirect(route('posts'), navigate: true);
    }

    #[Title('Create Post')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
