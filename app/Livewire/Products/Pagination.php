<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Pagination extends Component
{
    public $currentPage;
    public $lastPage;

    protected $listeners = ['updatePagination'];

    public function mount($currentPage, $lastPage)
    {
        $this->currentPage = $currentPage;
        $this->lastPage = $lastPage;
    }

    public function updatePagination($currentPage, $lastPage)
    {
        $this->currentPage = $currentPage;
        $this->lastPage = $lastPage;
    }

    public function previousPage()
    {
        if ($this->currentPage > 1) {
            $this->dispatch('previousPage');
        }
    }

    public function nextPage()
    {
        if ($this->currentPage < $this->lastPage) {
            $this->dispatch('nextPage');
        }
    }

    public function goToPage($page)
    {
        $this->dispatch('goToPage', $page);
    }

    public function render()
    {
        return view('livewire.products.pagination');
    }
}
