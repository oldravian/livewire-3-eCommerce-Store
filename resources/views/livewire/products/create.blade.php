<div wire:ignore.self id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full  justify-center items-center flex">
    <div class="relative w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-3xl font-medium text-gray-900 dark:text-white">
                    Sell an item
                </h3>
                <button id="modal-cross" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="medium-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 space-y-4">
                <form wire:submit.prevent="submit" class="space-y-6">
                <div>
                    <label for="photos" class="block text-sm font-medium text-gray-700">Upload photos</label>
                    <div class="mt-1 flex justify-center px-6 py-12 border-gray-300 rounded-md" style="border-width:1px">
                        <div class="space-y-1 text-center">
                            <label for="file-upload" class="relative cursor-pointer bg-white focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500 inline-flex items-center justify-center py-2 px-4 border rounded-md" style="border-color: #D9F99D">
                                <span>Upload photo</span>
                                <input id="file-upload" wire:model="photo" name="file-upload" type="file" class="sr-only">
                            </label>
                            @if ($photo)
                                <p class="mt-2 text-sm text-gray-500">{{ $photo->getClientOriginalName() }}</p>
                            @endif
                        </div>
                    </div>
                    @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" wire:model="name" name="name" id="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Describe your item</label>
                        <textarea id="description" wire:model="description" name="description" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" wire:model="category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                            <option value="" disabled>Select</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        @error('category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Item price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">£</span>
                            </div>
                            <input type="text" wire:model="price" name="price" id="price" class="block w-full pl-7 pr-7 sm:text-sm border-gray-300 rounded-md text-right" placeholder="00.00">
                        </div>
                        @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex items-center border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" class="w-full py-2 px-4 rounded" style="background-color: #D9F99D;">Upload item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>