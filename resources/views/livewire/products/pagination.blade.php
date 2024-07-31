<div class="flex justify-between items-center py-4 px-8 bg-white">
    <a href="#" wire:click.prevent="previousPage" class="text-gray-600 hover:text-gray-900 flex items-center">
        @include('components.svgs.previous')
        <span class="pl-2.5">Previous</span>
    </a>
    <div class="lg:flex hidden lg:space-x-2">
        @for ($page = 1; $page <= $lastPage; $page++)
            <a href="#" wire:click.prevent="goToPage({{ $page }})" class="px-3 py-1 border-1.5 text-gray-600 hover:bg-gray-200 rounded {{ $currentPage == $page ? 'border-green' : '' }}">{{ $page }}</a>
        @endfor
    </div>
    <a href="#" wire:click.prevent="nextPage" class="text-gray-600 hover:text-gray-900 flex items-center">
        <span class="pr-2.5">Next</span>
        @include('components.svgs.next')
    </a>
</div>
