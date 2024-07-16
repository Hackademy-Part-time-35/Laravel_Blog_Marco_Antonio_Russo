<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />

    <h1 class="pt-10 text-center text-5xl">{{ $genre_name }}</h1>
    <main class="flex my-420 mx-20 flex-wrap gap-10 gap-y-20 justify-center py-10">
        @foreach ($anime as $item)
            <x-anime-card 
            :route="route('anime.byId',[$genre_id, $genre_name, $item['mal_id']])" 
            :anime="$item" :title="$item['title']" 
            :date="$item['year']"
            :description="$item['synopsis']" 
            :rank="$item['score']" 
            :img="$item['images']['jpg']['image_url']" 
            :$genre_id />
        @endforeach
    </main>

</x-layout>
