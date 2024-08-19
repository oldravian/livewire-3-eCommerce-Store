<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Livewire\Forms\ProductForm;

class EditProduct extends Component
{
    use WithFileUploads;

    public ProductForm $form;

    //route model binding
    public function mount(Product $product)
    {
        $this->form->setProduct($product);
    }

    public function submit()
    {
        $this->form->update(); 
        $this->redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.edit-product');
    }
}
