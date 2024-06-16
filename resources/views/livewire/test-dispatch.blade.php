<div>
    This is a test dispatcher

    <form wire:submit="test">

        <input wire:model="input" type="text" wire:keyup="test" class="border">



        <button type="submit">Submit</button>

        <livewire:test-listener>

    </form>

    <button class="bg-red-200 p-2" wire:click="$dispatch('test-listener')">Create Test Action</button>
    <button class="bg-red-200 p-2" @click="$dispatch('test-listener')">Create Test Action</button>
</div>
