<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function updatedSearch()
    {
        $this->dispatch('searchUpdated', $this->search);
    }

    public function render()
    {
        return view('livewire.products.search');
    }
}
