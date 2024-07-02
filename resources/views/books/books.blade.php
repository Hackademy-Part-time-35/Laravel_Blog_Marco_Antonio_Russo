<x-layout :$title>
    <x-navbar />
    @auth
        <header class="py-10 px-32 flex justify-end">
            <a class="fa-solid fa-plus text-5xl font-black" href=" {{ route("book.create") }} "></a>
        </header>
    @endauth
    <main class="flex my-420 mx-20 flex-wrap gap-10 gap-y-20 justify-center @guest mt-40 @endguest">
        @foreach($books as $key => $book)
            <x-book-card :route="route('book', $book->id)" :title="$book->title" :author="$book->author" :date="$book->date" :description="$book->description" :rank="$book->rank" :img="$book->img" />
        @endforeach
    </main>

</x-layout>