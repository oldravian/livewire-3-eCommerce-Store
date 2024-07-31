<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Sort extends Component
{
    public $sortOption = 'price_asc';

    public function setSortOption($option)
    {
        $this->sortOption = $option;
        $this->dispatch('sortUpdated', $option);
    }

    public function render()
    {
        $sortOptions = config('sort.options');
        $currentLabel = $sortOptions[$this->sortOption] ?? 'Price: Low to High';

        return view('livewire.products.sort', compact('sortOptions', 'currentLabel'));
    }
}
