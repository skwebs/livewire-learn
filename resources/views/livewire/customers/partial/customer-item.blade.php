<div
    class="overflow-hidden group/customer relative p-1 bg-gray-100 w-full rounded min-h-16 border hover:bg-gray-50  transition-all duration-100 ">
    <a class="relative bg-gray-100 w-full rounded h-full flex gap-1" href="{{ route('customers.txn', $customer->uuid) }}"
        wire:navigate>
        <div class="aspect-square h-full bg-white rounded border">
            <img src="https://via.placeholder.com/52" alt="Square Image" class="object-cover w-full h-full">
        </div>
        <div class="flex-grow text-sm">
            <div>
                <div class="px-1  overflow-clip ">{{ $customer->name }}</div>
                <div class="px-1 text-xs overflow-clip ">{{ $customer->address }}</div>
            </div>
        </div>

        <div
            class=" absolute right-2 top-1/2 -translate-y-1/2 group-hover/customer:opacity-100  opacity-0  delay-75 px-1 flex items-center transition-all duration-300">
            <div class="px-2 py-1 bg-gray-600 text-white rounded-lg ">
                Call
            </div>
        </div>

    </a>
</div>
