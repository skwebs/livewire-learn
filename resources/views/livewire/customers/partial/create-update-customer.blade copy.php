<div class="relative">




    <div class="relative " x-data="{ shown: false, timeout: null }" x-init="@this.on('student-created-updated', () => {
        clearTimeout(timeout);
        shown = true;
        timeout = setTimeout(() => { shown = false }, 2000);
    })"
        x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms
        style="display: none;">
        <div class="absolute bottom-2 right-0 bg-gray-800 text-white  px-3 py-1 rounded-lg">
            {{ session('message') }}
        </div>
    </div>


    @if ($isOpen)
        <div class="fixed z-10 inset-0 overflow-y-auto" wire:keydown.enter="store">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div wire:click="closeModal()" class="fixed inset-0 duration-75 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                    <form class="flex flex-col w-full">
                        <div class="bg-sky-50 px-4 pt-5 pb-4 sm:p-6 sm:pb-4 flex-grow">
                            <div class="sm:flex sm:items-start">
                                <div class=" mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-600" id="modal-headline">
                                        Add Customer {{-- {{ $student_id ? "Update Student id : $student_id" : 'Create Student' }} --}}
                                    </h3>
                                    <div class="mt-2">
                                        <input type="text" wire:model="name" autofocus autocomplete="name"
                                            class="border rounded w-full py-2 px-3" placeholder="Name">
                                        {{-- @error('name')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" wire:model="name" autofocus autocomplete="name"
                                            class="border rounded w-full py-2 px-3" placeholder="Mobile Number">
                                        {{-- @error('name')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" wire:model="email" class="border rounded w-full py-2 px-3"
                                            placeholder="Email">
                                        {{-- @error('email')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
                                    <div class="mt-2">
                                        <input type="text" wire:model="address"
                                            class="border rounded w-full py-2 px-3" placeholder="Address">
                                        {{-- @error('email')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
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
                            <span wire:loading class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                Saving...
                            </span>
                        </div>
                    </form>

                    {{-- <form>
                        <div class="bg-sky-50 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class=" mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
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
                                        <input type="text" wire:model="email" class="border rounded w-full py-2 px-3"
                                            placeholder="Email">
                                        @error('email')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
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
                            <span wire:loading class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                Saving...
                            </span>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    @endif
</div>
