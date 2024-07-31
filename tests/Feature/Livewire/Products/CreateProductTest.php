<?php

namespace Tests\Feature\Livewire\Products;

use App\Livewire\Products\Create;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CreateProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_product_successfully()
    {
        Storage::fake('public');

        $category = Category::factory()->create();

        $file = UploadedFile::fake()->image('photo.jpg');

        Livewire::test(Create::class)
            ->set('name', 'Test Product')
            ->set('description', 'This is a test product')
            ->set('category', $category->id)
            ->set('price', 100)
            ->set('photo', $file)
            ->call('submit')
            ->assertDispatched('productCreated')
            ->assertDispatched('close-modal');

        $this->assertDatabaseHas('products', [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'category_id' => $category->id,
            'price' => 100,
            'photo' => 'storage/photos/' . $file->hashName(),
        ]);

        Storage::disk('public')->assertExists('photos/' . $file->hashName());
    }

    /** @test */
    public function it_does_not_create_a_product_due_to_validation_error()
    {
        $category = Category::factory()->create();

        Livewire::test(Create::class)
            ->set('name', '') // Invalid name
            ->set('description', 'This is a test product')
            ->set('category', $category->id)
            ->set('price', 100)
            ->set('photo', UploadedFile::fake()->image('photo.jpg'))
            ->call('submit')
            ->assertHasErrors(['name' => 'required']);

        $this->assertDatabaseMissing('products', [
            'description' => 'This is a test product',
            'category_id' => $category->id,
            'price' => 100,
        ]);
    }
}
