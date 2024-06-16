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

            <form class="flex flex-col gap-2" wire:submit="store">
                <div class="">
                    {{-- <label for="name" class="block text-sm font-medium leading-6 text-gray-900">First name</label> --}}
                    <div class="">
                        <input type="text" name="name" id="name" autocomplete="given-name" placeholder="Name"
                            wire:model="name"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('name')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="">
                    <div class="">
                        <input type="tel" name="contact" id="contact" autocomplete="phone" placeholder="Contact"
                            wire:model="contact"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('contact')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <input type="tel" name="whatsapp" id="whatsapp" autocomplete="phone" placeholder="WhatsApp"
                            wire:model="whatsapp"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('whatsapp')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <input type="email" name="email" id="email" autocomplete="email" placeholder="Email"
                            wire:model="email"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('email')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" name="address" id="address" autocomplete="address" placeholder="Address"
                            wire:model="address"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('address')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @else
                            <div class="text-green-600 text-[10px]">Looks good</div>
                        @enderror
                    </div>
                </div>
                <div class="flex gap-5 my-4">

                    <button @click="openModal=false" type="button"
                        class=" w-full bg-gray-500 hover:bg-gray-600 text-white rounded-md px-3 py-2">Cancel
                    </button>
                    <button type="submit"
                        class=" w-full bg-blue-600 hover:bg-blue-700 text-white rounded-md px-3 py-2">Submit</button>
                </div>
            </form>



        </div>
    </div>
</div>
