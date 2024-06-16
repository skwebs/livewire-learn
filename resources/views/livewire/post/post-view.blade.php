<div>
    {{-- In work, do what you enjoy. --}}
    <div class="mt-10">
        <a class="hover:underline hover:text-amber-600 text-blue-600" href="{{ route('post.index') }}" wire:navigate>All
            Posts</a>
        <table class="border">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-2 py-1 border">Id</th>
                    <th class="px-2 py-1 border">Title</th>
                    <th class="px-2 py-1 border">Content</th>
                    <th class="px-2 py-1 border">Created At</th>
                </tr>
            </thead>
            <livewire:posts.post-item :$post>


        </table>

    </div>
</div>
