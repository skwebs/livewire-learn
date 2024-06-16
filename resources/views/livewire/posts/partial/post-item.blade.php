<div>

    <tr class="border odd:bg-gray-100 hover:bg-amber-300/10 transition-all duration-150">
        <td class="px-2 py-1 border text-center">{{ $post->id }}</td>
        <td class="px-2 py-1 border grow">{{ $post->title }}</td>
        <td class="px-2 py-1 border" class="text-truncate text-wrap">
            {{ $post->content }}
        </td>
        <td class="px-2 py-1 border text-nowrap text-truncate ">
            {{ $post->created_at }}
        </td>
        <td class="px-1 py-1 flex w-36 text-center">
            <a class="text-blue-600 border-blue-600 px-3 py-1 rounded transition-all duration-100 hover:bg-blue-600 hover:text-white"
                href="{{ route('posts.show', $post->id) }}" wire:navigate>Show</a>
            <a class="text-amber-600 border-amber-600 px-3 py-1 rounded transition-all duration-100 hover:bg-amber-600 hover:text-white"
                href="{{ route('posts.edit', $post->id) }}" wire:navigate>Edit</a>
            <button
                class="text-red-600 border-red-600 px-3 py-1 rounded transition-all duration-100 hover:bg-red-600 hover:text-white"
                wire:click.prevent="delete({{ $post->id }})" type="button"
                wire:confirm="Are you sure you want to delete post id {{ $post->id }}?">
                Delete
            </button>

        </td>
    </tr>
</div>
