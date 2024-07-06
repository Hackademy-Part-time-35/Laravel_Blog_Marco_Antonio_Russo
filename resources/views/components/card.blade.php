<article class="lg:w-1/3 articleComponent mb-5 md:mb-0 shadow-xl rounded-3xl flex justify-between items-center border-2 border-slate-800 overflow-hidden hover:scale-105 transition-transform duration-75">
    <div class="p-6 w-1/2 flex flex-col gap-2">
            <section class="mb-4">
                <h3 class="text-2xl font-medium text-red-700">{{ Str::upper($article->title) }}</h3>
                <h6 class="text-sm"><em>{{$article->category}}</em></h6>
            </section>
            <p class="articleComponent">
                @if( Str::length($article->description) > 25 )
                    {{Str::substr($article->description,0,25) . "..."}}
                @else
                    {{$article->description}}
                @endif
            </p>
            <a class=" text-red-600 underline text-sm" href="{{ route('articles.show', $article) }}">
                <i class="fa-solid fa-chevron-right"></i>
                <em> Leggi articolo completo</em>
            </a>
    </div>
    <div class="h-full w-1/2">
        <img class="h-full rounded-r-2xl object-cover" src="{{ $article->image ? Storage::url($article->image): "https://savethefrogs.com/wp-content/uploads/placeholder-image-blue-landscape.png" }}" alt="">
    </div>
</article>