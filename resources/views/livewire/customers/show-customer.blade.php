<div>

    <div class="mx-auto w-96 bg-gray-50">
        <div class="bg-white h-dvh flex flex-col">
            <div class="bg-blue-600 px-3 py-1 text-white">
                <h1 class="text-center font-bold text-2xl ">Customer Details</h1>
            </div>

            <div class="p-4">
                <table class="border-2">
                    <tr>
                        <th class="text-left px-2 py-1 align-top border-b">Name</th>
                        <td class="text-left px-2 py-1 align-top border-b">{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <th class="text-left px-2 py-1 align-top border-b">Email</th>
                        <td class="text-left px-2 py-1 align-top border-b">{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <th class="text-left px-2 py-1 align-top border-b">Contact</th>
                        <td class="text-left px-2 py-1 align-top border-b">{{ $customer->contact }}</td>
                    </tr>
                    <tr>
                        <th class="text-left px-2 py-1 align-top border-b">Address</th>
                        <td class="text-left px-2 py-1 align-top border-b">{{ $customer->address }}</td>
                    </tr>
                </table>
            </div>

            <a class="text-center py-2 px-3 bg-gray-600 rounded-lg hover:bg-gray-700 w-fit mx-auto text-white"
                href="{{ route('customers.list') }}" wire:navigate>Go Back</a>
        </div>
    </div>

</div>
