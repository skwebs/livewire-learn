<div>
    <button wire:click="create()" class="btn btn-primary">Create Student</button>

    @if ($isOpen)
        {{-- <livewire:students.create-update-student> --}}
        @include('livewire.students.create-update-student')
    @endif




    {{-- -- --}}

    <table class="border w-full bg-white shadow ">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-2 py-1 border">Name</th>
                <th class="px-2 py-1 border">Email</th>
                <th class="px-2 py-1 border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <button
                            class="text-yellow-600 border-yellow-600 px-3 py-1 rounded transition-all duration-100 hover:bg-yellow-600 hover:text-white"
                            wire:click="edit({{ $student->id }})" class="btn btn-primary">Edit</button>

                        <button
                            class="text-red-600 border-red-600 px-3 py-1 rounded transition-all duration-100 hover:bg-red-600 hover:text-white"
                            wire:click="delete({{ $student->id }})" type="button"
                            wire:confirm="Are you sure you want to delete post id {{ $student->id }}?">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
