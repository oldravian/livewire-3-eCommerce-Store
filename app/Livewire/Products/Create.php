<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Livewire\Forms\ProductForm;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    //public $categories;

    public ProductForm $form;

    public function mount()
    {
        //$this->categories = Category::all();
    }

    public function submit()
    {
        $this->form->store(); 

        // Emit event to parent to refresh product list
        $this->dispatch('productCreated');

        //$this->dispatch('close-modal');
        //instead of dispatching above event, we can also use below line to run JS to close modal
        $this->js("document.getElementById('modal-cross').click();");
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
