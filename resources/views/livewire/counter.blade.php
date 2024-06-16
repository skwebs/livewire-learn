<div class="p-5">
    {{-- The whole world belongs to you. --}}
    <h1>{{ $count }}</h1>
    <button wire:click="increment" class="bg-green-600 text-white rounded px-3 py-1">Increment</button>
    <button wire:click="decrement" class="bg-red-600 text-white rounded px-3 py-1">Decrement</button>
    <br>
    <br>
    <a class="hover:underline hover:text-amber-600 text-blue-600" href="{{ route('post.create-post') }}"
        wire:navigate>Create Post</a>


    <div>
        <input class="border-2 rounded-md border-black mb-5" type="text" data-picker>
    </div>

    <div>
        <input class="border-2 border-blue-600 rounded" type="text" wire:model="todo">

        Todo character length: <h2 x-text="$wire.todo.length"></h2>
        Todo character length: <h2 x-text="$wire.todo.toUpperCase()"></h2>
    </div>


    <form class="border" wire:submit.prevent="save()">
        <label for="title">Title:</label>
        <input class="border-2 border-blue-600 rounded" type="text" id="title" wire:model="title">
        <h2 x-text="$wire.title.toUpperCase()"></h2>

        <label for="content">Content:</label>
        <input class="border-2 border-blue-600 rounded" type="text" id="title" wire:model="content">
        <h2 x-text="$wire.content.toUpperCase()"></h2>

        <button class="bg-blue-600 hover:bg-blue-800 text-white rounded px-3 py-1 my-2" type="submit">Create
            Post</button>
    </form>

    @assets
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    @endassets

    @script
        <script>
            new Pikaday({
                field: $wire.$el.querySelector('[data-picker]')
            });
        </script>
    @endscript
</div>
