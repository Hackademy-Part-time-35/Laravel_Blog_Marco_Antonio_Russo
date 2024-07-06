<x-layout :$title>

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}

    

    {{-- START Header --}}
    <header class=" p-14 flex flex-col gap-5 ">
        
                <h1 class="text-center font-bold text-5xl mb-10">Articoli</h1>

        
     <div class="mx-auto flex flex-wrap gap-x-16 gap-y-8 justify-center">
            @if(count($articles) === 0) {{-- Crea per ogni articolo un titolo, la categoria e l'anteprima del contenuto con infine il link all'articolo completo --}}
                <p>Nessun articolo disponibile</p>
            @else
                @foreach($articles as $article)
                    @if($article->visible)
                        <x-card :$article/>
                    @endif
                @endforeach
            @endif
     </div>

    </header>
    
    
    {{-- END Header --}}
</x-layout>
