<x-layout :$title>

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}
    


    {{-- START Header --}}
        <h1 class="font-bold text-4xl text-center p-5 lg:text-7xl">{{config("app.name")}}</h1>
    {{-- END Header --}}

    <section class="flex justify-evenly items-center w-1/2 mx-auto mt-20">
        <a href="{{route("prodotti")}}" class="btn btn-outline btn-primary">Prodotti</a>
        <a href="{{route("numero", 15)}}" class="btn btn-outline btn-primary">Numero 15</a>
        <a href="{{route("todo")}}" class="btn btn-outline btn-primary">TODO</a>
    </section>
</x-layout>
