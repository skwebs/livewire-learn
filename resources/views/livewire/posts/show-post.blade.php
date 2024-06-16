<div class="p-5">
    <div class="max-w-sm mx-auto ">

        <div class="border p-5 rounded-xl bg-white">
            <table>
                <tr>
                    <th class="text-left px-2 py-1">Id</th>
                    <th>:</th>
                    <td class="text-left px-2 py-1">{{ $post->id }}</td>
                </tr>
                <tr>
                    <th class="text-left px-2 py-1">Title</th>
                    <th>:</th>
                    <td class="text-left px-2 py-1">{{ $post->title }}</td>
                </tr>
                <tr>
                    <th class="text-left px-2 py-1">Content</th>
                    <th>:</th>
                    <td class="text-left px-2 py-1">{{ $post->content }}</td>
                </tr>
            </table>
            <div class="flex gap-5 p-2">

                <a class="bg-blue-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-blue-700"
                    href="{{ route('posts.edit', $post->id) }}" wire:navigate>Edit Details</a>

                <button
                    class="bg-red-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-red-700"
                    wire:click.prevent="delete({{ $post->id }})" type="button"
                    wire:confirm="Are you sure you want to delete post id {{ $post->id }}?">
                    Delete
                </button>
                {{-- <button
                    class="bg-red-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-red-700">Delete</button> --}}
                <a class="bg-gray-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-gray-700"
                    href="{{ route('posts') }}" wire:navigate>Go Back</a>
            </div>
        </div>

    </div>
</div>
