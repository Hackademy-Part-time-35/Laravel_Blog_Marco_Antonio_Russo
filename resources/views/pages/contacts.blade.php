<x-layout :$title>
    
    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}

    
    
    {{-- START Header --}}
    <header class=" mt-40 flex flex-col items-center gap-20">
        <h1 class="font-bold text-5xl lg:text-7xl ">I nostri social</h1>
        <div class="container text-7xl flex flex-col items-center gap-10 md:flex-row justify-evenly">
            <a href="/contatti" class="fa-brands fa-facebook hover:text-blue-600 transition-colors ease-in-out duration-200"></a>
            <a href="/contatti" class="fa-brands fa-instagram instagram-gradient"></a>
            <a href="/contatti" class="fa-brands fa-twitter hover:text-blue-500 transition-colors ease-in-out duration-200"></a>
            <a href="/contatti" class="fa-brands fa-linkedin hover:text-blue-800 transition-colors ease-in-out duration-200"></a>
            <a href="/contatti" class="fa-brands fa-github hover:text-slate-600 transition-colors ease-in-out duration-200"></a>
        </div>
    </header>
    {{-- END Header --}}

</x-layout> 