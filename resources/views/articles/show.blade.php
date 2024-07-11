<x-layout :title="Str::upper($article->title)">

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}



    {{-- START Main --}}
    <main class="p-10">
        <a class="text-red-600" href={{route("articles")}}><i class="fa-solid fa-chevron-left"></i><em> Torna agli articoli</em></a>
        
        <article class="mt-10 px-5 lg:px-60 flex gap-10">
            @if($article->image)
                <img class="w-1/3" src="{{Storage::url($article->image)}}" alt="{{$article->title}}">
            @endif

            <section>
                <section class="mb-4">
                    <h1 class="text-3xl text-red-700">{{Str::upper("$article->title")}}</h1>
                    <h6 class="text-sm">
                        <em>
                            @foreach ($article->categories as $category)
                            {{$category->name}}
                            @endforeach
                        </em>
                    </h6>
                </section>
                <p class="text-sm mb-5">{{$article->description}}</p>
                <p>{{$article->body}}</p>
            </section>
            
        </article>
    
    </main>
    {{-- END Main --}}
    
</x-layout>
