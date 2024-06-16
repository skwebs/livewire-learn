<div>

    <div class="mt-10 mx-auto max-w-screen-lg">
        <a class="hover:underline hover:text-amber-600 text-blue-600" href="{{ route('post.create') }}"
            wire:navigate>Create
            Post</a>
        <table class="border w-full">
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
                <livewire:posts.post-item :$post :key="$post->id">
            @endforeach

        </table>

    </div>
</div>
