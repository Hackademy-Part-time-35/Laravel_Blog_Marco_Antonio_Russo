<x-layout :$title>
    <x-navbar />

    <x-breadcrumbs />
    <main class="p-10" >
        
        <x-toast-success />
        <form method="POST" enctype="multipart/form-data"  action="{{ route("books.update", $book) }}" class="mt-10 px-5 lg:px-60 flex justify-center gap-5">
            @csrf
            @method('PUT')
{{-- IMG --}}
            <section class="flex items-center w-[400px] h-[600px] border-dashed border-2 rounded-xl border-gray-700 justify-center object-cover overflow-hidden">
                <img id="coverImg" class=" hidden rounded-xl pointer-events-none" src="" alt="cover-img">
                <label id="coverLabel" class="flex flex-col absolute text-center text-gray-500" for="cover"><i class="fa-solid fa-plus text-5xl opacity-70 pointer-events-none"></i>Drag and Drop</label>
                <input draggable="true" type="file" name="cover" id="coverInput"
                class="w-full h-full file:opacity-0 empty:opacity-0">
            </section>

{{-- DIV Editabili --}}
            <section class="mb-4 w-1/2  flex flex-col">
                <p class="text-xs">click to edit <i class="fa-regular fa-edit"></i></p>
                <h1 id="titleEdit" contenteditable="true" class="text-3xl text-red-700"> {{old("title", $book->title) }}</h1>

                <h6 class="text-sm mb-5">
                    <em id="authorEdit"   contenteditable="true">
                        {{old("author", $book->author)}}
                    </em>
                    <span> - </span>
                    <span id="dateEdit" contenteditable="true">
                        {{old("date", $book->date)}}
                    </span>
                </h6>


                <p id="descEdit" contenteditable="true" class="mb-5">
                    {{old("description", $book->description)}}
                </p>


                <div class="text-end mt-20">
                    <x-rank :rank="0" />
                    <input id="starInput" name="rank" class="relative bottom-5 right-[39.3px] w-[106.81px] opacity-0" type="range" min="0" max="10" value="{{old("rank", $book->rank)}}">
                </div>


                <input class="hidden" id="bookTitle" type="text" name="title" value="TITOLO">
                <input class="hidden" id="bookAuthor" type="text" name="author">
                <input class="hidden" id="bookDate" type="text" name="date" value="ciao">
                <input class="hidden" name="description" id="bookDesc" type="text">

                <x-error-validation name="title" />
                <x-error-validation name="author" />
                <x-error-validation name="date" />
                <x-error-validation name="description" />


                <button id="btnNewBook" type="submit" class="mt-auto w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                    Salva
                </button>
            </section>


        </form>
    
    </main>
</x-layout>