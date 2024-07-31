<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Category;
class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $category;
    public $price;
    public $photo;
    public $categories;
    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|exists:categories,id',
        'price' => 'required|numeric|min:0',
        'photo' => 'required|image|max:1024', // 1MB Max
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function submit()
    {
        $this->validate();

        $photoPath = $this->photo->store('photos', 'public');
        $photoPath = "storage/" . $photoPath;
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category,
            'price' => $this->price,
            'photo' => $photoPath,
        ]);

        // Emit event to parent to refresh product list
        $this->dispatch('productCreated');

        $this->dispatch('close-modal');

        // Reset individual form fields
        $this->reset(['name', 'description', 'price', 'photo', 'category']);
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
