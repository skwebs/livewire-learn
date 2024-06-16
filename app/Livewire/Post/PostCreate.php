<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostCreate extends Component
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
        return $this->redirect('/post', navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.post-create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title' => 'required|min:3',
            'content' => 'required|min:10',
        ]);
    }
}
