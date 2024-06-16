<div class="p-5 relative">


    <div class="relative " x-data="{ shown: false, timeout: null }" x-init="@this.on('student-deleted', () => {
        clearTimeout(timeout);
        shown = true;
        timeout = setTimeout(() => { shown = false }, 2000);
    })"
        x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms
        style="display: none;">
        <div class="absolute top-0 right-0 bg-gray-800 text-white  px-3 py-1 rounded-lg">
            {{ session('message') }}
        </div>
    </div>


    <button wire:click="create"
        class="bg-blue-600 text-white px-3 py-1 rounded-md border-2 border-transparent hover:border-2 hover:bg-blue-700 my-2">Create
        Student</button>

    <livewire:students.create-update-student />

    <table class="border w-full bg-white shadow ">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-2 py-1 border">Id</th>
                <th class="px-2 py-1 border">Name</th>
                <th class="px-2 py-1 border">Email</th>
                <th class="px-2 py-1 border">Created At</th>
                <th class="px-2 py-1 border">Action</th>
            </tr>
        </thead>
        @foreach ($students as $student)
            <tr class="border odd:bg-gray-100 hover:bg-amber-300/10 transition-all duration-150">
                <td class="px-2 py-1 border my-2">{{ $student->id }}</td>
                <td class="px-2 py-1 border ">{{ $student->name }}</td>
                <td class="px-2 py-1 border ">{{ $student->email }}</td>
                <td class="px-2 py-1 border ">{{ $student->created_at }}</td>
                <td class="px-2 py-1 border ">
                    <button
                        class="text-blue-600 border-blue-600 px-3 py-1 rounded transition-all duration-100 hover:bg-blue-600 hover:text-white"
                        wire:click="edit({{ $student->id }})" class="btn btn-primary">Edit</button>
                    <button wire:click="delete({{ $student->id }})"
                        wire:confirm="Are you sure you want to delete post id {{ $student->id }}?"
                        class="text-red-600 border-red-600 px-3 py-1 rounded transition-all duration-100 hover:bg-red-600 hover:text-white">Delete</button>
                </td>
            </tr>
        @endforeach

    </table>


</div>
