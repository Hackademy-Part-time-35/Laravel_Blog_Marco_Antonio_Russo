<article class="articleComponent mb-5 md:mb-0">
    <section class="mb-4">
        <h3 class="text-2xl font-medium text-red-700">{{ Str::upper($title) }}</h3>
        <h6 class="text-sm"><em>{{$category}}</em></h6>
    </section>
    <p class="articleComponent lg:w-2/5">{{Str::substr($description,0,100)}}...</p>
    <a class=" text-red-600 underline text-sm" href="{{ $route }}"><i class="fa-solid fa-chevron-right"></i><em> Leggi articolo completo</em></a>
</article>