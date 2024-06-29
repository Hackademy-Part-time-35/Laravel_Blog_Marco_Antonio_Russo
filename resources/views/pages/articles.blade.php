<x-layout :$title>

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}

    

    {{-- START Header --}}
    <header class=" p-14 flex flex-col gap-5 ">
        
        <section class="flex justify-between items-start">
            <p></p>
            <h1 class="font-bold text-5xl mb-10">Articoli</h1>
            <a href="{{ route("article.create") }}" class="fa-solid fa-plus text-3xl text-white "></a>
        </section>

        @if(count($articles) === 0) {{-- Crea per ogni articolo un titolo, la categoria e l'anteprima del contenuto con infine il link all'articolo completo --}}
            <p>Nessun articolo disponibile</p>
        @else
            @foreach($articles as $key => $article)
                @if($article->visible)
                    <x-card :description="$article->description" :category="$article->category" :title="$article->title" :route="route('article', $article->id)"/>
                @endif
            @endforeach
        @endif

    </header>
    
    
    {{-- END Header --}}
</x-layout>
