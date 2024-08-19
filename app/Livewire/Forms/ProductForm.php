<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Product;
use App\Models\Category;

class ProductForm extends Form
{

    public $name;
    public $description;
    public $price;
    public $photo;
    public $category = ""; // Initialize to empty string so that the first option is selected by default
    public $categories;

    public ?Product $product;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|exists:categories,id',
        'price' => 'required|numeric|min:0',
        'photo' => 'required|image|max:1024', // 1MB Max
    ];

    public function __construct($component, $name = null)
    {
        // Call the parent constructor with the required arguments
        parent::__construct($component, $name);
    
        // Perform your initialization logic
        $this->categories = Category::all();
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category = $product->category_id;
    }

     // Override the getRules method to dynamically return rules based on the context
     public function getRules()
     {
         return $this->rules;
     }

    public function store()
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
        
        // Reset individual form fields
        $this->reset(['name', 'description', 'price', 'photo', 'category']);
    }

    public function update()
    {
        // Copy the existing rules from the property
        $rules = $this->rules;

        // Modify the photo rule to be nullable for updates
        $rules['photo'] = 'nullable|image|max:1024';

        // Validate using the modified rules
        $this->validate($rules);

        // Check if a new photo has been uploaded
        if ($this->photo) {
            $photoPath = $this->photo->store('photos', 'public');
            $photoPath = "storage/" . $photoPath;
            $this->product->photo = $photoPath;
        }

        // Update other fields
        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category,
            'price' => $this->price,
            'photo' => $this->product->photo, // Use updated or existing photo path
        ]);

        // Reset individual form fields if necessary
        $this->reset(['name', 'description', 'price', 'photo', 'category']);
    }
}
