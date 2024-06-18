<x-layout :$title>

    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}
    


    {{-- START Header --}}
    <header class="h-[calc(100vh-5rem)] flex justify-center items-center">
        <h1 class="font-bold text-4xl lg:text-7xl">{{config("app.name")}}</h1>
    </header>
    {{-- END Header --}}

</x-layout>
