<article class="articleComponent mb-5 md:mb-0">
    <section class="mb-4">
        <h3 class="text-2xl font-medium text-red-700">{{ Str::upper($article->title) }}</h3>
        <h6 class="text-sm"><em>{{$article->category}}</em></h6>
    </section>
    <p class="articleComponent lg:w-2/5">
        @if( Str::length($article->description) > 25 )
            {{Str::substr($article->description,0,25) . "..."}}
        @else
            {{$article->description}}
        @endif
    </p>
    <a class=" text-red-600 underline text-sm" href="{{ route('articles.show', $article) }}"><i class="fa-solid fa-chevron-right"></i><em> Leggi articolo completo</em></a>
</article>