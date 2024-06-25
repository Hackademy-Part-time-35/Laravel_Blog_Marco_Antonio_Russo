<x-layout :$title>

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}

    

    {{-- START Header --}}
    <header class=" p-14 flex flex-col gap-5 ">
        
        <h1 class="font-bold text-5xl mb-10 self-center">Articoli</h1>

        @if(count($articles) === 0) {{-- Crea per ogni articolo un titolo, la categoria e l'anteprima del contenuto con infine il link all'articolo completo --}}
            <p>Nessun articolo disponibile</p>
        @else
            @foreach($articles as $key => $article)
                @if($article["visible"])
                    <x-card :description="$article['description']" :category="$article['category']" :title="$article['title']" :route="route('article', $key)"/>
                @endif
            @endforeach
        @endif

    </header>
    
    
    {{-- END Header --}}
</x-layout>
