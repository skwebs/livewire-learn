<div class="px-5">

    <button wire:click.prevent="$dispatch('toggle-modal')"
        class="bg-blue-600 text-white rounded-xl px-4 py-2 hover:bg-blue-700">Toggle
        Modal</button>
    <div class="mx-auto max-w-screen-lg">
        <div>
            <a class="hover:underline hover:text-amber-600 text-blue-600 my-5 inline-block mr-5"
                href="{{ route('home') }}" wire:navigate>Home</a>
            <a class="hover:underline hover:text-amber-600 text-blue-600 my-5 inline-block"
                href="{{ route('posts.create') }}" wire:navigate>Create
                Post</a>
        </div>
        <table class="border w-full bg-white shadow ">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-2 py-1 border">Id</th>
                    <th class="px-2 py-1 border">Title</th>
                    <th class="px-2 py-1 border">Content</th>
                    <th class="px-2 py-1 border">Created At</th>
                    <th class="px-2 py-1 border">Action</th>
                </tr>
            </thead>
            @foreach ($posts as $post)
                <livewire:posts.partial.post-item :$post :key="$post->id">
            @endforeach

        </table>

    </div>

    @if ($isModalOpen)
        <div x-data={open:false} wire:click.prevent="$dispatch('toggle-modal')"
            class="fixed inset-0 bg-black/50 flex justify-center
            items-center">
            <div class="p-5 bg-white rounded-xl min-w-80 relative">
                <button type="button" wire:click.prevent="$dispatch('toggle-modal')"
                    class="absolute -right-3
                    -top-3 size-7 flex justify-center items-center rounded-full border-2 border-gray-400
                    bg-gray-100">X</button>

                {{-- content goes here --}}
            </div>
        </div>
    @endif
</div>
