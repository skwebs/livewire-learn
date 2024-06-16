{{-- <div>

    <div class="mx-auto w-96 bg-gray-50">
        <div class="bg-white h-dvh flex flex-col">
            <div class="bg-blue-600 text-white p-2">
                Header
            </div>
            <div class="flex flex-col gap-2 p-2 grow overflow-y-auto overflow-x-hidden">
                @foreach ($customers as $customer)
                    <livewire:customers.partial.customer-item :$customer>
                @endforeach
            </div>
            <div class="bg-transparent p-2">
                <div class="flex gap-2">
                    <div class="flex-grow bg-gray-100 rounded-lg p-2"> Menu 1 </div>
                    <div class="flex-grow bg-gray-100 rounded-lg p-2"> Menu 2 </div>
                    <div class="flex-grow bg-gray-100 rounded-lg p-2"> Menu 3 </div>
                    <div class="flex-grow bg-gray-100 rounded-lg p-2"> Menu 4 </div>

                </div>
            </div>
        </div>
    </div>

</div> --}}



<div x-data="{ openModal: $wire.entangle('isOpen') }" class="relative overflow-clip">

    <div class="mx-auto w-96 bg-gray-50 relative">


        <div class="bg-white h-dvh flex flex-col relative">
            <div class="bg-blue-800 text-white p-2">
                <span>Anshu Medical Hall</span>
            </div>
            <div class="w-full p-2 flex gap-2">
                <input type="search" name="search" id="search" class="rounded p-1 border w-full "> <button
                    class="bg-sky-500 text-white px-3 rounded" type="submit">Search</button>
            </div>
            <div class="flex flex-col divide-y grow overflow-y-auto overflow-x-hidden">

                @foreach ($customers as $customer)
                    <div
                        class="overflow-hidden group/customer relative  w-full  min-h-14 border hover:bg-gray-50  transition-all duration-100 ">
                        <a class="relative  w-full rounded h-full flex gap-1"
                            href="{{ route('customers.txn', $customer->uuid) }}" wire:navigate>
                            <div class="aspect-square h-full bg-white  p-1">
                                <div class="aspect-square h-full bg-white border rounded-full overflow-hidden">
                                    <img src="https://via.placeholder.com/52" alt="Square Image"
                                        class="object-cover w-full h-full">
                                </div>
                            </div>
                            <div class="flex-grow max-w-52 text-clip">
                                <div class="text-gray-700">{{ $customer->name }}</div>
                                <div class="text-xs text-gray-500">{{ $customer->created_at }}</div>
                            </div>
                            <div class="w-24 invisible bg-green-50">
                                <button
                                    class="text-blue-600 border-blue-600 px-3 py-1 rounded transition-all duration-100 hover:bg-blue-600 hover:text-white"
                                    wire:click="edit({{ $customer->uuid }})" class="btn btn-primary">Edit</button>
                                <button wire:click="delete({{ $customer->uuid }})"
                                    wire:confirm="Are you sure you want to delete post id {{ $customer->uuid }}?"
                                    class="text-red-600 border-red-600 px-3 py-1 rounded transition-all duration-100 hover:bg-red-600 hover:text-white">Delete</button>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="w-full relative flex justify-end  bg-yellow-50 text-sm">
                <button wire:click="openCustomerModal"
                    class="absolute bottom-2 right-5 px-4 py-2 bg-red-700 text-white font-semibold rounded-3xl">Add
                    Customer</button>

                {{-- <button @click="$dispatch('post-created')">...</button> --}}
            </div>




            <div
                class=" relative text-sm font-medium text-center text-gray-500 border-b border-t border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex gap-5 -mb-px justify-center">
                    <li class="grow">
                        <a href="#"
                            class="inline-block py-4 px-1 border-t-2 border-transparent  hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Customer</a>
                    </li>
                    <li class="grow">
                        <a href="#"
                            class="inline-block py-4 px-1 text-blue-600 border-t-2 border-blue-600  active dark:text-blue-500 dark:border-blue-500"
                            aria-current="page">Bills</a>
                    </li>
                    <li class="grow">
                        <a href="#"
                            class="inline-block py-4 px-1 border-t-2 border-transparent  hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Settings</a>
                    </li>

                </ul>
            </div>
            {{-- @if ($isOpen) --}}
            {{-- <div x-data="{ openModal: false }" class="h-full overflow-x-clip absolute bottom-0 inset-x-0 bg-gray-400"> --}}


            {{-- <div @click="openModal = ! openModal" class="translate-y-0  bg-red-500 h-full absolute bottom-0 inset-x-0"
                x-show="openModal" x-transition:enter="transition ease-out duration-300 "
                x-transition:enter-start="opacity-0  translate-y-full"
                x-transition:enter-end="opacity-100  translate-y-0" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100  translate-y-0 "
                x-transition:leave-end="opacity-0  translate-y-full ">Hello 👋</div> --}}

            {{-- <button class="fixed top-0 mt-5 bg-sky-600 px-3 py-2 rounded-md hover:bg-sky-700 text-white"
                @click="openModal = ! openModal">Toggle</button> --}}
            {{-- </div> --}}
            {{-- @endif --}}



            {{-- <livewire:customers.partial.create-update-customer /> --}}
            <livewire:customers.customers-modal />

        </div>









    </div>
</div>
