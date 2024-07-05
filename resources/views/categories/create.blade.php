<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />
    {{-- START Main --}}
    <main class=" flex justify-center py-10">
        <form method="POST" action="{{ route("categories.store") }}" enctype="multipart/form-data" class="w-full md:w-1/2 border border-red-500 p-6 bg-gray-900">
            @csrf
            
            
            <h2 class="text-2xl pb-3 font-semibold">
                Crea Categoria
            </h2>
            <x-check-success />
            <div>
                <div class="flex flex-col mb-3">
                    <label for="name">Nome</label>
                    <input name="name" type="text" id="name" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("name") border-red-700 @enderror" value="{{ old("name") }}" max="150">
                    <x-error-validation name="name" />
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

</x-layout> 