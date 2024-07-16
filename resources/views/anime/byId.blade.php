<x-layout :title="Str::upper($anime['title'])">

    {{-- START Navbar --}}
    <x-navbar />
    <x-breadcrumbs />

    {{-- END Navbar --}}
    {{-- START Main --}}
    <main class="p-10">
        {{-- <a class="text-red-600" href={{route("anime.byGenre", [$genre_id, $genre_name])}}><i class="fa-solid fa-chevron-left"></i><em> Torna alla categoria</em></a> --}}
        
        <article class="mt-10 px-5 lg:px-60 flex justify-center gap-5">
            <secion>
                <div class="flex justify-center">
                        <img class="w-[400px]" src="{{$anime["images"]["jpg"]["image_url"]}}" alt="">
                </div>
            </secion>
            <section class="mb-4 w-1/2">
                <h1 class="text-3xl text-red-700">{{Str::upper($anime["title"])}}</h1>
                <h6 class="text-sm mb-5">{{$anime["year"]}}</h6>
                <p class="mb-5">{{$anime["synopsis"]}}</p>
                <div class="text-end mt-20">
                    <x-rank :rank="$anime['score']" />
                </div>
                
            </section>
        </article>
    
    </main>
    {{-- END Main --}}
    
</x-layout>
