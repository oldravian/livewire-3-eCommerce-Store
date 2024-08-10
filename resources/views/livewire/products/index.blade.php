<div>
    <div class="container mx-auto lg:px-24" style="padding-top: 20px;">

    <div class="text-center mb-7 py-2 px-4 rounded" style="background-color: #D9F99D;">
    <h1 class="text-xl font-bold text-gray-900">Demo E-Commerce Experience Powered by TALL (Tailwind, Alpine, Laravel, Livewire)</h1>
    <p class="mt-2 text-sm text-gray-600">This is just a demo page developed by <a href="https://github.com/oldravian" target="_blank" class="text-blue-500 underline">Habib</a> to demonstrate his TALL stack skills.</p>

</div>
        <header class="flex flex-col lg:flex-row lg:justify-between items-center py-4 px-8 bg-white">
            <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                @livewire('products.search')
            </div>

            <div class="flex flex-col lg:flex-row items-center w-full lg:w-1/2 lg:space-x-4 justify-end">
                @livewire('products.sort')
                <button class="py-2 px-4 rounded ml-4 flex items-center" style="background-color: #D9F99D;"  data-modal-target="medium-modal" data-modal-toggle="medium-modal">
                    @include('components.svgs.plus')
                    <span>Sell item</span>
                </button>
            </div>
        </header>

        <main class="py-8 px-8">
            <div>
                @if($products->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        @foreach($products as $product)
                            @livewire('products.product-card', ['product' => $product], key($product->id))
                        @endforeach
                    </div>
                @else
                    <div class="flex items-center justify-center h-64">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
                            </svg>
                            <p class="mt-4 text-lg font-semibold text-gray-600">No products found</p>
                            <p class="mt-2 text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
                        </div>
                    </div>
                @endif
            </div>
        </main>

        @if($products->count() > 0)
            <!-- Pagination Section -->
            @livewire('products.pagination', ['currentPage' => $currentPage, 'lastPage' => $lastPage], key('pagination-' . $currentPage))
        @endif
    </div>

    @livewire('products.create')
</div>
