{{-- <div x-data="{ isOpen: $wire.entangle('isOpen') }" class="h-full overflow-x-clip absolute bottom-0 inset-x-0">


    <div @click="isOpen = ! isOpen" class="translate-y-0  bg-red-500 h-full" x-show="isOpen"
        x-transition:enter="transition ease-out duration-300 " x-transition:enter-start="opacity-0  translate-y-full "
        x-transition:enter-end="opacity-100  translate-y-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100  translate-y-0 " x-transition:leave-end="opacity-0  translate-y-full ">
        Hello 👋</div>
    <button class="fixed top-0 mt-5 bg-sky-600 px-3 py-2 rounded-md hover:bg-sky-700 text-white"
        @click="isOpen = ! isOpen">Toggle</button>
</div> --}}
{{-- x-data="{ isOpen: $wire.entangle('isOpen') }" --}}



<div>
    {{-- overlay --}}
    <div @click="openModal=false" class="duration-75  bg-black/30 absolute inset-0 " x-show="openModal"
        x-transition:enter=" ease-out duration-100 " x-transition:enter-start="opacity-0  "
        x-transition:enter-end="opacity-100  " x-transition:leave=" ease-in duration-100"
        x-transition:leave-start="opacity-100   " x-transition:leave-end="opacity-0  ">
    </div>

    {{-- main content --}}
    <div class="rounded-t-3xl translate-y-0  bg-white absolute bottom-0 inset-x-0 " x-show="openModal"
        x-transition:enter="transition ease-out duration-300 " x-transition:enter-start="opacity-0  translate-y-full"
        x-transition:enter-end="opacity-100  translate-y-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100  translate-y-0 " x-transition:leave-end="opacity-0  translate-y-full ">

        {{-- content --}}
        <div class="p-5">
            <h2 class="mb-5 text-2xl text-gray-600">Add Customer</h2>



        </div>

        <button wire:click="close" class=" w-full bg-blue-600 hover:bg-blue-700 text-white rounded-md px-3 py-2">Close
        </button>
        <button @click="openModal=false"
            class=" w-full bg-blue-600 hover:bg-blue-700 text-white rounded-md px-3 py-2">Close
            Client</button>
    </div>
</div>
