<div class="p-5 ">
    <div class="bg-white mx-auto max-w-screen-sm rounded-md px-5 py-2">
        <h1 class="text-center font-semibold text-gray-500 text-2xl">This is home page</h1>
        <a class="bg-blue-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-blue-700"
            href="{{ route('posts') }}" wire:navigate>Post</a>
        <a class="bg-blue-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-blue-700"
            href="{{ route('students') }}" wire:navigate>Students</a>
        <a class="bg-blue-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-blue-700"
            href="{{ route('customers.list') }}" wire:navigate>Customers List</a>
    </div>


    <div x-data="{ open: true }" class="h-full overflow-x-clip">
        <button class="mt-5 bg-sky-600 px-3 py-2 rounded-md hover:bg-sky-700 text-white"
            @click="open = ! open">Toggle</button>

        <div class="translate-y-0  bg-red-500 h-96" x-show="open"
            x-transition:enter="transition ease-out duration-300 "
            x-transition:enter-start="opacity-0  translate-y-full " x-transition:enter-end="opacity-100  translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100  translate-y-0 "
            x-transition:leave-end="opacity-0  translate-y-full ">Hello 👋</div>
    </div>
</div>
