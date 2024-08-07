<div class="bg-white overflow-hidden relative">
    <img src="/{{$product->photo}}" alt="Product image" class="w-full h-80 object-cover rounded-md">
    <div class="flex justify-between items-start pt-3">
        <div>
            <h2>{{$product->name}}</h2>
            <p class="text-lg font-semibold mb-2">£{{$product->price}}</p>
            <div class="flex items-center space-x-2">
                <img src="/test.jpg" alt="Author" class="w-4 h-4 rounded-full">
                <p class="text-xs font-normal">{{$product->category->name}}</p>
            </div>
        </div>

        <button class=" text-gray-500 focus:outline-none">
        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.936523" y="1.26074" width="36" height="36" rx="4" stroke="#E5E5E5"/>
        <path d="M12.5349 14.5257C11.0704 15.9902 11.0704 18.3646 12.5349 19.829L18.9366 26.2307L25.3382 19.829C26.8026 18.3646 26.8026 15.9902 25.3382 14.5257C23.8737 13.0613 21.4993 13.0613 20.0349 14.5257L18.9366 15.6241L17.8382 14.5257C16.3737 13.0613 13.9993 13.0613 12.5349 14.5257Z" stroke="#171717" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </button>
    </div>
</div>