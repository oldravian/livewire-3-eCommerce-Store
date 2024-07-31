<div x-data="{ open: false }" class="relative inline-block text-left flex items-center space-x-2 mb-4 lg:mb-0">
    <label for="sort" class="text-gray-700">Sort by</label>
    <button @click="open = !open" @click.away="open = false"
        class="inline-flex justify-between rounded border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none"
        type="button">
        {{ $currentLabel }}
        @include('components.svgs.dropdown')
    </button>
    <div x-show="open" x-transition
        class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 custom-dropdown"
        
        role="menu" aria-orientation="vertical" aria-labelledby="sortDropdownButton">
        <div class="py-1" role="none">
            @foreach ($sortOptions as $key => $label)
                <a href="#" wire:click.prevent="setSortOption('{{ $key }}')" @click="open = false" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem">{{ $label }}</a>
            @endforeach
        </div>
    </div>
</div>
