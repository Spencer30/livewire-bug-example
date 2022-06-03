<x-layout>
    <h1>I am page 1</h1>
    <form wire:submit.prevent="handleClick" class="flex flex-col">

    <input type="text" wire:model="input" class='flex-1 focus:ring-blue-500 focus:border-blue-500 block my-4 p-2 w-full min-w-0 sm:text-sm border-gray-300 rounded-md shadow'/>
    {{-- <button class="bg-blue-500 text-white p-2 rounded my-2" wire:click="handleClick" onclick="console.log('button clikced')">Click Me</button> --}}
    <button class="bg-blue-500 text-white p-2 rounded my-2" type="submit">Click Me</button>
    </form>
</x-layout>
