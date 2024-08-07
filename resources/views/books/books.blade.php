<x-layout :$title>
    <x-navbar />
    <main class="flex my-420 mx-20 flex-wrap gap-10 gap-y-20 justify-center py-10">
        @foreach($books as $key => $book)
            <x-book-card :route="route('books.show', $book)" :title="$book->title" :author="$book->author" :date="$book->date" :description="$book->description" :rank="$book->rank" :img="$book->img" />
        @endforeach
    </main>

</x-layout>