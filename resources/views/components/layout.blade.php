<div class="max-w-5xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center w-full h-full">
    <div class="flex w-full justify-center mb-10 mt-2">
        {{-- <img src="/images/logo.svg" width="75" height="75" class="text-center" /> --}}
        <h1>My App</h1>
    </div>
    <div class="flex flex-wrap justify-between w-full">
        <div>
            <livewire:steps />
            {{-- <x-district.steps /> --}}
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>