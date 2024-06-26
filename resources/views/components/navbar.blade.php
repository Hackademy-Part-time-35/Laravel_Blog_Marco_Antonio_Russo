<nav class=" border-b-2 border-b-red-700 fixed w-full top-0 left-0">
    <section class=" p-3 flex justify-between items-center bg-gradient-to-r from-slate-800 to-slate-700 relative">
        <div class="flex items-center gap-3">
            <a href={{route("homepage")}}><img class=" h-10" src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="laravel-logo"></a>
            <h2 class="  md:text-1xl lg:text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
        </div>
        
        
        <i id="navBarsBtn" class="fa-solid fa-bars md:hidden"></i>
        <ul id="navLinks" class="hidden  md:static md:border-0 md:rounded-none md:m-0 md:p-0 md:flex gap-6 text-lg lg:text-xl items-center font-medium">
            <li class="border-b-2 md:border-0"><a class=" {{ request()->is("/") ? "active-link" : "" }}" href="{{route("homepage")}}" >Home</a></li>
            <li class="border-b-2 md:border-0"><a class=" {{ request()->is("articoli") || request()->is("articoli/*") ? "active-link" : "" }}" href={{route("articles")}}>Articoli</a></li>
            <li class="border-b-2 md:border-0"><a class=" {{ request()->is("contatti") ? "active-link" : "" }}" href={{route("contacts")}}>Contatti</a></li>
            <li><a class=" {{ request()->is("chi-siamo") ? "active-link" : "" }}" href={{route("aboutUs")}}>Chi siamo</a></li>
            <li><a class=" {{ request()->is("conta-stringa") ? "active-link" : "" }}" href={{route("count.string")}}>Conta Stringa</a></li>
            <li><a class=" {{ request()->is("libri") || request()->is("libri/*") ? "active-link" : "" }}" href={{route("books")}}>Libri</a></li>

        </ul>


    </section>
</nav>