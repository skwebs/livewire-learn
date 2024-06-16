<div>
    {{-- overlay --}}
    <div @click="openDebitModal=false" class="duration-75  bg-black/30 absolute inset-0 " x-show="openDebitModal"
        x-transition:enter=" ease-out duration-100 " x-transition:enter-start="opacity-0  "
        x-transition:enter-end="opacity-100  " x-transition:leave=" ease-in duration-100"
        x-transition:leave-start="opacity-100   " x-transition:leave-end="opacity-0  ">
    </div>

    {{-- main content --}}
    <div class="rounded-t-3xl translate-y-0  bg-white absolute bottom-0 inset-x-0 " x-show="openDebitModal"
        x-transition:enter="transition ease-out duration-300 " x-transition:enter-start="opacity-0  translate-y-full"
        x-transition:enter-end="opacity-100  translate-y-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100  translate-y-0 " x-transition:leave-end="opacity-0  translate-y-full ">

        {{-- content --}}
        <div class="p-5">
            <h2 class="mb-5 text-2xl text-red-600">You are giving (Debit)</h2>

            <form class="flex flex-col gap-2" wire:submit="store">
                <input type="hidden" value="{{ $customer_uuid }}" wire:model="customer_uuid">
                <div class="">

                    <div class="">
                        <input type="text" name="amount" id="amount" autocomplete="currency"
                            placeholder="Giving Amount" wire:model="amount"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('amount')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="">

                    <div class="">
                        <label for="date" class="block text-sm font-medium leading-6 text-gray-600">Transaction
                            Date</label>
                        <input type="date" name="date" id="date" autocomplete="date" placeholder="Date"
                            wire:model="date"
                            class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="h-4">
                        @error('date')
                            <div class="text-red-600 text-[10px]">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="flex gap-5 my-4">

                    <button @click="openDebitModal=false" type="button"
                        class=" w-full bg-gray-500 hover:bg-gray-600 text-white rounded-md px-3 py-2">Cancel
                    </button>
                    <button type="submit"
                        class=" w-full bg-red-600 hover:bg-red-700 text-white rounded-md px-3 py-2 font-semibold">Submit</button>
                </div>

            </form>



        </div>
    </div>
</div>
