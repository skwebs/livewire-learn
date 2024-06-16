<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{
    public $posts = array();
    public $title = "";
    public $content = "";
    function mount()
    {
        $this->posts = Post::all();
    }

    public function save()
    {
        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect()->to('/post')
            ->with('status', 'Post created!');
    }
    public function render()
    {
        return view('livewire.posts.post-create');
    }
}










// // <?php

// namespace App\Livewire\Posts;

// use App\Models\Post;
// use Livewire\Component;

// class PostCreate extends Component
// {
//     public $posts = [];
//     public $title = "";
//     public $content = "";

//     public function mount()
//     {
//         $this->posts = Post::all();
//     }

//     public function save()
//     {
//         $validatedData = $this->validate([
//             'title' => 'required|min:3',
//             'content' => 'required|min:10',
//         ]);

//         $post = Post::create($validatedData);

//         $this->emit('postCreated', $post->id); // Emit event with post ID

//         $this->reset(['title', 'content']); // Clear form fields for new entry
//     }

//     public function render()
//     {
//         return view('livewire.posts.post-create');
//     }

//     public function updated($propertyName)
//     {
//         $this->validateOnly($propertyName, [
//             'title' => 'required|min:3',
//             'content' => 'required|min:10',
//         ]);
//     }
// }