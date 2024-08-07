<x-layout :$title >
    <x-navbar />
    <x-breadcrumbs />
    {{-- START Main --}}
    <main class=" flex justify-center py-10">
        <form method="POST" action={{ $action }} enctype="multipart/form-data" class="w-full md:w-1/2 border border-red-500 p-6 bg-gray-900">
            @csrf
            @if($method == "PUT")
                @method('PUT')
            @endif

            
            <h2 class="text-2xl pb-3 font-semibold">
                {{$title}}
            </h2>
            <div>
                <div class="flex flex-col mb-3">
                    <label for="title">Titolo</label>
                    <input name="title" type="text" id="title" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("title") border-red-700 @enderror" value="{{old("title", $article->title)}}" max="150">
                    <x-error-validation name="title" />
                </div>
                <div class="flex flex-col mb-3">
                    <div class="flex justify-between py-4">
                        <label for="category_id">Categorie</label>
                        <button type="button" onclick="categoryModal.showModal()" class="flex items-center bg-gray-800 p-2"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <div class="grid grid-flow grid-cols-4">
                        @foreach ($categories as $category)
                            <div class="form-control">
                                <label class="label gap-2 justify-start cursor-pointer">
                                    <input name="categories[]" type="checkbox" class="checkbox checkbox-primary" @checked($article->categories->contains($category->id)) value="{{ $category->id }}" />
                                    <span class="label-text">{{$category->name}}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <x-error-validation name="category_id" />
                    
                </div>
                <div class="flex flex-col mb-3">
                    <label for="description">Descrizione</label>
                    <input name="description" type="text" id="description" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("description") border-red-700 @enderror" value="{{old("description", $article->description)}}" max="255" >
                    <x-error-validation name="description" />
                </div>
                <div class="flex flex-col mb-3">
                    <label for="body">Articolo <span class="text-xs">(optional)</span></label>
                    <textarea name="body" rows="4" id="body" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("body") border-red-700 @enderror" maxlength="5000">{{old("body", $article->body)}}</textarea>
                    <x-error-validation name="body" />

                </div>
                <div class="flex flex-col mb-3">
                    <label for="image">Immagine articolo</label>
                    <input type="file" name="image" id="image" class="block w-full border text-sm focus:z-10 focus:border-red-700 focus:ring-red-700  border-gray-800 text-gray-400
                    file:border-0 file:me-4 file:py-3 file:px-4 file:bg-gray-800 file:text-white">
                </div>
                <div id="preview-container" class="flex-col mb-3 relative justify-center items-center hidden w-full">
                    <img class=" opacity-6s0 border-dashed border-4 border-red-700" id="preview">
                    <p class=" absolute text-7xl text-red-800 font-black opacity-55">Preview</p>
                </div>
                <div class="flex justify-end gap-10 mb-3">
                        <div>
                            <label for="true">Visibile</label>
                            <input value="1" type="radio" name="visible" id="true" checked @checked($article->visible === 1) class="radio radio-error " />
                        </div>
                        <div>
                            <label for="false">Invisibile</label>
                            <input value="0" type="radio" name="visible" id="false" @checked($article->visible === 0) class="radio radio-error" />

                        </div>
                        
                    {{-- </select> --}}
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


    <!-- Open the modal using ID.showModal() method -->
<dialog id="categoryModal" class="modal modal-bottom sm:modal-middle ">
    <div class="modal-box border-2  border-red-700">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <form method="POST" action="{{ route("categories.storeFromArticles") }}">
            @csrf
            <input id="modalTitle" type="text" name="title" class="hidden">
            <input id="modalDescription" type="text" name="description" class="hidden">
            <input id="modalBody" type="text" name="body" class="hidden">

            <h3 class="text-lg font-bold mb-5">Nuova Categoria</h3>
            <div class="flex flex-col gap-2">
                <label for="name">Nome</label>
                <input name="name" type="text" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="modal-action">
                @csrf
                <!-- if there is a button in form, it will close the modal -->
                <button type="submit" class="btn btn-outline btn-success">Crea</button>
        </form>
    </div>
</dialog>

<x-toast-success />

</x-layout> 