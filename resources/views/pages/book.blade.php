<x-layout :title="Str::upper($book['title'])">

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}


    {{-- START Main --}}
    <main class="p-10">
        <a class="text-red-600" href={{route("books")}}><i class="fa-solid fa-chevron-left"></i><em> Torna ai libri</em></a>
        
        <article class="mt-10 px-5 lg:px-60 flex justify-center gap-5">
            <secion>
                <div class="flex justify-center">
                    <object class="w-[400px]" data="{{Storage::url($book->img)}}">
                        <img class="w-[400px]" src="{{$book->img}}" alt="">
                    </object>
                </div>
            </secion>
            <section class="mb-4 w-1/2">
                <h1 class="text-3xl text-red-700">{{Str::upper($book["title"])}}</h1>
                <h6 class="text-sm mb-5"><em>{{$book["author"]}}</em><span> - {{$book["date"]}}</span></h6>
                <p class="mb-5">{{$book["description"]}}</p>
                <div class="text-end mt-20">
                    <x-rank :rank="$book['rank']" />
                </div>
                
            </section>
        </article>
    
    </main>
    {{-- END Main --}}
    
</x-layout>
