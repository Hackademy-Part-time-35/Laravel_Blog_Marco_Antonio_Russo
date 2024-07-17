<x-layout :$title >
    <x-navbar />
    <x-breadcrumbs />
    {{-- START Main --}}
    <main class=" flex justify-center py-10">
        <form method="POST" action={{ route("product.update", $product) }} enctype="multipart/form-data" class="w-full md:w-1/2 border border-red-500 p-6 bg-gray-900">
            @csrf
            @method('PUT')

            
            <h2 class="text-2xl pb-3 font-semibold">
                {{$title}}
            </h2>
            <div>
                <div class="flex flex-col mb-3">
                    <label for="title">Titolo</label>
                    <input name="title" type="text" id="title" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("title") border-red-700 @enderror" value="{{old("title", $product->title)}}" max="150">
                    <x-error-validation name="title" />
                </div>
                <div class="flex flex-col mb-3">
                    <label for="year">Anno</label>
                    <input name="year" type="text" id="year" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("year") border-red-700 @enderror" value="{{old("year", $product->year)}}" max="150">
                    <x-error-validation name="year" />
                    </div>
                    <x-error-validation name="year" />
                </div>
                <div class="flex flex-col mb-3">
                    <label for="score">Score</label>
                    <input name="score" type="number" id="score" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("score") border-red-700 @enderror" value="{{old("score", $product->score)}}" min="0" max="10" >
                    <x-error-validation name="score" />
                </div>
                
                <div class="flex flex-col mb-3">
                    <label for="image">URL Immagine</label>
                    <input name="image" type="text" id="image" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("image") border-red-700 @enderror" value="{{old("image", $product->image)}}" max="255" >
                </div>
                <div id="preview-container" class="flex-col mb-3 relative justify-center items-center hidden w-full">
                    <img class=" opacity-6s0 border-dashed border-4 border-red-700" id="preview">
                    <p class=" absolute text-7xl text-red-800 font-black opacity-55">Preview</p>
                </div>
            </div>
            <div class="w-full pt-3">
                <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                Invia
                </button>
            </div>
            </form>
    </main>
    {{-- END Main --}}


   

<x-toast-success />

</x-layout> 