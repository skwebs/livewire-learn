<div>
    <div class="mt-10">
        <a class="hover:underline hover:text-amber-600 text-blue-600" href="{{ route('post.index') }}" wire:navigate>All
            Posts</a>
        <form class="max-w-sm mx-auto border p-5 rounded-md" wire:submit="update()">
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Post Title</label>
                <input type="text" id="title" wire:model="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Post Title" required />
                @error('title')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Post Content</label>
                <input type="text" id="content" wire:model="content"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required placeholder="Post Content" />
                @error('content')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                Post</button>
        </form>

    </div>
</div>
