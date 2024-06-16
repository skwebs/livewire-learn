{{-- <div>
    <h2 class="text-xl font-bold mb-4">Balance: ${{ number_format($balance, 2) }}</h2>

    <div class="mb-4">
        {{-- <livewire:transactions.create-update-transaction :customer="$customer" /> --
    </div>

    <div class="mb-4">
        <p>Total Given: ${{ number_format($totalGiven, 2) }}</p>
        <p>Total Taken: ${{ number_format($totalTaken, 2) }}</p>
    </div>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">Given Amount</th>
                <th class="py-2">Taken Amount</th>
                <th class="py-2">Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactionsWithAmounts as $transaction)
                <tr>
                    <td class="py-2">{{ number_format($transaction['given'], 2) }}</td>
                    <td class="py-2">{{ number_format($transaction['taken'], 2) }}</td>
                    <td class="py-2">{{ number_format($transaction['balance'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}


<div>
    <div class="mx-auto max-w-md ">
        <div class="bg-gray-50 h-dvh flex flex-col">
            <div class="bg-blue-800 text-white p-2 flex justify-around">
                <a class="inline-block flex-grow text-center" href="{{ route('customers.list', ['id' => 1]) }}">
                    &lt; </a>
                <h2 class="text-xl font-bold text-center">Balance: ₹ {{ number_format($balance, 2) }}</h2>
            </div>

            {{-- <div class="w-full p-2 flex gap-2">
                <input type="search" name="search" id="search" class="rounded p-1 border w-full "> <button
                    class="bg-sky-500 text-white px-3 rounded" type="submit">Search</button>
            </div>
             --}}
            <div class="flex font-semibold p-2 w-full py-1 border-b text-xs text-cente">
                <div class="flex-grow">Date Time</div>
                <div class="w-16 text-red-700">Debit (-)</div>
                <div class="w-16 text-green-600">Taken (+)</div>
                <div class="w-16 text-yellow-600 text-nowrap">Balance (=)</div>
            </div>
            {{-- <div
                class="rounded h-full flex overflow-hidden group/customer relative  w-full  min-h-14 shadow hover:bg-gray-50  transition-all duration-100 ">


                <div class="flex-grow px-2 py-1 font-semibold flex flex-col justify-around">
                    Entries

                </div>
                <div class="w-20 px-2 flex items-center justify-end font-semibold  text-red-600 text-right">
                    Given
                </div>
                <div class="w-20 px-2 flex items-center justify-end font-semibold  text-right text-green-600">
                    Taken
                </div>

            </div> --}}
            <div {{-- id="transactions-table-body" x-data x-init="$nextTick(() => {
                const el = document.getElementById('transactions-table-body');
                el.scrollTop = el.scrollHeight;
            })"
                @transactionsUpdated.window="$nextTick(() => { const el = document.getElementById('transactions-table-body'); el.scrollTop = el.scrollHeight; })"
                 --}} class="flex flex-col gap-y-2 px-2 grow overflow-y-auto overflow-x-hidden py-2">


                @foreach ($transactionsWithAmounts as $transaction)
                    {{-- <div
                        class="overflow-hidden group/customer relative  w-full  min-h-14 border hover:bg-gray-50  transition-all duration-100 ">
                        <a class="relative  w-full rounded h-full flex"
                            href="{{ route('customers.txn', $customer->uuid) }}" wire:navigate>
                            <div class="aspect-square h-full bg-white  p-1">
                                <div class="aspect-square h-full bg-white border rounded-full overflow-hidden">
                                    <img src="https://via.placeholder.com/52" alt="Square Image"
                                        class="object-cover w-full h-full">
                                </div>
                            </div>
                            <div class="flex-grow ">
                                <div class="text-gray-700">Name</div>
                                <div class="text-xs text-gray-500">Address</div>
                            </div>
                            <div class="w-20 bg-green-50">
                            </div>
                            <div class="w-20 bg-red-50">
                            </div>
                        </a>
                    </div> --}}
                    <div
                        class="bg-white overflow-hidden group/customer relative text-xs  w-full  min-h-10 shadow hover:bg-gray-50  transition-all duration-100 ">
                        <a class="relative  w-full rounded h-full flex"
                            href="{{ route('customers.txn', $customer->uuid) }}" wire:navigate>

                            <div class="flex-grow px-2 py-1 text-xs flex flex-col justify-around">
                                <div class="text-gray-700">{{ $transaction['created_at'] }}</div>
                                {{-- <div @class([
                                    'bg-green-50 text-green-500' => $transaction['balance'] < 0,
                                    'bg-red-50 text-red-600' => $transaction['balance'] >= 0,
                                    'w-fit px-2',
                                ])>
                                    {{ number_format($transaction['balance'], 2) }}
                                </div> --}}
                            </div>
                            <div
                                class="w-16 px-2 flex items-center justify-end font-semibold bg-red-50/50 text-red-600 text-right">
                                {{ number_format($transaction['given'], 2) === '0.00' ? '' : number_format($transaction['given'], 2) }}
                            </div>
                            <div
                                class="w-16 px-2 flex items-center justify-end font-semibold bg-green-50/50 text-green-600 text-right">
                                {{ number_format($transaction['taken'], 2) === '0.00' ? '' : number_format($transaction['taken'], 2) }}
                            </div>
                            <div
                                class="w-16 px-2 flex items-center justify-end font-semibold bg-yellow-50/20 text-yellow-600 text-right">
                                {{ number_format($transaction['balance'], 2) }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="w-full flex justify-around p-2 border-t gap-2">
                <button class="bg-red-700 text-white px-4 py-1 rounded flex-grow">You Gave</button>
                <button class="bg-green-700 text-white px-4 py-1 rounded flex-grow">You Got</button>
            </div>
            {{-- <div
                class="text-sm font-medium text-center text-gray-500 border-y border-gray-200 dark:text-gray-400 dark:border-gray-700">
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
            </div> --}}

        </div>
    </div>

</div>
