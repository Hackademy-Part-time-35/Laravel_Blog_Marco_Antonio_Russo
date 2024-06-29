<x-layout :title="Str::upper($article->title)">

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}



    {{-- START Main --}}
    <main class="p-10">
        <a class="text-red-600" href={{route("articles")}}><i class="fa-solid fa-chevron-left"></i><em> Torna agli articoli</em></a>
        
        <article class="mt-10 px-5 lg:px-60">
            <section class="mb-4">
                <h1 class="text-3xl text-red-700">{{Str::upper($article->title)}}</h1>
                <h6 class="text-sm"><em>{{$article->category}}</em></h6>
            </section>
            <p>{{$article["description"]}}</p>
            @if($article->image)
                <img src="{{Storage::url($article->image)}}" alt="{{$article->title}}">
            @endif
        </article>
    
    </main>
    {{-- END Main --}}
    
</x-layout>
