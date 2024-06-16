{{-- <div x-data="{ isOpen: @entangle('isOpen') }"> --}}
<div x-data="{ isOpen: $wire.entangle('isOpen') }">



    {{-- @if ($isOpen) --}}
    <div x-show="isOpen" x-on:click.outside="isOpen = false">
        <div class="absolute bottom-0 w-full  h-full  overflow-hidden bg-black/20" @click="isOpen = false"></div>
        <div x-transition:enter="translate-y-full ease-out duration-300" x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0 ease-in duration-300"
            x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
            class="inset-x-0 transition-transform   absolute bottom-0 w-full  bg-white rounded-t-2xl overflow-hidden pb-10 duration-300 ">
            <form class="flex flex-col w-full">
                <div class="bg-sky-50 px-4 pt-5 pb-4 sm:p-6 sm:pb-4 flex-grow">
                    <div class="sm:flex sm:items-start">
                        <div class=" mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            {{-- <h3 class="text-lg leading-6 font-medium text-gray-600" id="modal-headline">
                            Add Customer
                            {{ $student_id ? "Update Student id : $student_id" : 'Create Student' }}
                        </h3>
                        <div class="mt-2">
                            <input type="text" wire:model="name" autofocus autocomplete="name"
                                class="border rounded w-full py-2 px-3" placeholder="Name">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <input type="text" wire:model="name" autofocus autocomplete="name"
                                class="border rounded w-full py-2 px-3" placeholder="Mobile Number">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <input type="text" wire:model="email" class="border rounded w-full py-2 px-3"
                                placeholder="Email">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <input type="text" wire:model="address"
                                class="border rounded w-full py-2 px-3" placeholder="Address">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div> --}}




                            <form class="max-w-sm mx-auto">
                                <div class="mb-5">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                        email</label>
                                    <input type="email" id="email"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        placeholder="name@flowbite.com" required />
                                </div>
                                <div class="mb-5">
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                        password</label>
                                    <input type="password" id="password"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="repeat-password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat
                                        password</label>
                                    <input type="password" id="repeat-password"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        required />
                                </div>
                                <div class="flex items-start mb-5">
                                    <div class="flex items-center h-5">
                                        <input id="terms" type="checkbox" value=""
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                            required />
                                    </div>
                                    <label for="terms"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                        agree with the <a href="#"
                                            class="text-blue-600 hover:underline dark:text-blue-500">terms and
                                            conditions</a></label>
                                </div>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                                    new account</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                    {{-- <span wire:loading class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        Saving...
                    </span> --}}
                </div>
            </form>
        </div>
    </div>
    {{-- @endif --}}
</div>
