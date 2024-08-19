<div>
    <div class="container mx-auto lg:px-24" style="padding-top: 20px;">
        <div class="text-center mb-7 py-2 px-4 rounded" style="background-color: #D9F99D;">
        <h1 class="text-xl font-bold text-gray-900">Demo E-Commerce Experience Powered by TALL (Tailwind, Alpine, Laravel, Livewire)</h1>
        <p class="mt-2 text-sm text-gray-600">This is just a demo page developed by <a href="https://github.com/oldravian" target="_blank" class="text-blue-500 underline">Habib</a> to demonstrate his TALL stack skills.</p>
        </div>
    </div>


    <div class=" lg:px-24">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <h3 class="text-3xl font-medium text-gray-900 dark:text-white">
                    Edit Product
                </h3>
            </div>
            <div class="p-4 md:p-5 space-y-4">
                <form wire:submit="submit" class="space-y-6">
                    <div>
                        <label for="photos" class="block text-sm font-medium text-gray-700">Upload photos</label>
                        <div class="mt-1 flex justify-center px-6 py-12 border-gray-300 rounded-md" style="border-width:1px">
                            <div class="space-y-1 text-center">
                                <label for="file-upload" class="relative cursor-pointer bg-white focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500 inline-flex items-center justify-center py-2 px-4 border rounded-md" style="border-color: #D9F99D">
                                    <span>Upload photo</span>
                                    <input id="file-upload" wire:model="form.photo" name="file-upload" type="file" class="sr-only">
                                </label>
                                @if ($form->photo)
                                    <p class="mt-2 text-sm text-gray-500">{{ $form->photo->getClientOriginalName() }}</p>
                                    @elseif ($form->product->photo)
                                    <!-- Display existing photo if no new photo is uploaded -->
                                    <img src="{{ asset($form->product->photo) }}" alt="Existing photo" class="mt-2 w-32 h-32 object-cover rounded-md">
                                    <p class="mt-2 text-sm text-gray-500">Current photo</p>
                                @endif
                            </div>
                        </div>
                        @error('form.photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" wire:model="form.name" name="name" id="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('form.name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Describe your item</label>
                        <textarea id="description" wire:model="form.description" name="description" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        @error('form.description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" wire:model="form.category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                            <option value="" selected disabled>Select</option>
                            @foreach ($form->categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('form.category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Item price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">£</span>
                            </div>
                            <input type="text" wire:model="form.price" name="price" id="price" class="block w-full pl-7 pr-7 sm:text-sm border-gray-300 rounded-md text-right" placeholder="00.00">
                        </div>
                        @error('form.price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex items-center border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" class="w-full py-2 px-4 rounded" style="background-color: #D9F99D;">Update item
                        </button>
                    </div>
                </form>
            </div>
        </div>
</div>
