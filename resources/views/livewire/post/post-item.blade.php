<div>
    {{-- Do your work, then step back. --}}
    <tr class="border odd:bg-gray-100 hover:bg-gray-200">
        <td class="px-2 py-1 border">{{ $post->id }}</td>
        <td class="px-2 py-1 border">{{ $post->title }}</td>
        <td class="px-2 py-1 border" class="text-truncate text-wrap">
            {{ $post->content }}
        </td>
        <td class="px-2 py-1 border text-nowrap" class="text-truncate text-wrap">
            {{ $post->created_at }}
        </td>
        <td class="px-2 py-1 border flex gap-2">
            <a class="hover:underline hover:text-amber-600 text-blue-600" href="{{ route('post.view', $post->id) }}"
                wire:navigate>View</a>
            <a class="hover:underline hover:text-amber-600 text-cyan-600" href="{{ route('post.edit', $post->id) }}"
                wire:navigate>Edit</a>


            <button class="hover:underline hover:text-amber-600 text-red-600"
                wire:click.prevent="delete({{ $post->id }})" type="button"
                wire:confirm="Are you sure you want to delete this post?">
                Delete post
            </button>

        </td>
    </tr>
</div>
