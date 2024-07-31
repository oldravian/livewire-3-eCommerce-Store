<div class="relative w-full">
    <input wire:model.live="search" type="text" placeholder="Search" class="border border-gray-300 rounded py-2 px-4 w-full">
    <button class="absolute inset-y-0 right-2 flex items-center pr-3">
        <span class="sr-only">Search</span>
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
    </button>
</div>