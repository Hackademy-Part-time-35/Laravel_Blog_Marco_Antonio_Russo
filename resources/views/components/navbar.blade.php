<nav class=" border-b-2 border-b-red-700 fixed w-full top-0 left-0">
    <section class=" p-3 flex justify-between items-center bg-gradient-to-r from-slate-800 to-slate-700 relative">
        <div class="flex items-center gap-3">
            <a href={{route("homepage")}}><img class=" h-10" src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="laravel-logo"></a>
            <h2 class="  md:text-1xl lg:text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
        </div>
        
        
    
        
        <div class="flex gap-10">
            <i id="navBarsBtn" class="fa-solid fa-bars md:hidden"></i>
            <ul id="navLinks" class="hidden  md:static md:border-0 md:rounded-none md:m-0 md:p-0 md:flex gap-6 text-lg lg:text-xl items-center font-medium">
                <li class="border-b-2 md:border-0"><a class=" {{ request()->is("/") ? "active-link" : "" }}" href="{{route("homepage")}}" >Home</a></li>
                <li class="border-b-2 md:border-0"><a class=" {{ request()->is("articoli") || request()->is("articoli/*") ? "active-link" : "" }}" href={{route("articles")}}>Articoli</a></li>
                <li class="border-b-2 md:border-0"><a class=" {{ request()->is("contatti") ? "active-link" : "" }}" href={{route("contacts")}}>Contatti</a></li>
                <li class="border-b-2 md:border-0"><a class=" {{ request()->is("chi-siamo") ? "active-link" : "" }}" href={{route("aboutUs")}}>Chi siamo</a></li>
                <li class="border-b-2 md:border-0"><a class=" {{ request()->is("conta-stringa") ? "active-link" : "" }}" href={{route("count.string")}}>Conta Stringa</a></li>
                <li class="border-b-2 md:border-0"><a class=" {{ request()->is("libri") || request()->is("libri/*") ? "active-link" : "" }}" href={{route("books")}}>Libri</a></li>
    
            </ul>
    

            {{-- Logged Users --}}
    
            @auth
            {{-- Dropdown button --}}
                <div class="flex items-center">
                    <div class=" w-10 h-10 rounded-full overflow-clip border-2 border-red-700 ">
                        <img src="{{ Storage::url(auth()->user()->img)}}" alt="">
                    </div>
    
                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-whitefont-medium ps-2 py-2.5 text-center " type="button">
                        <i class="fa-solid fa-chevron-down"></i> 
                    </button>
                </div>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdownInformation" class="z-10 hidden bg-slate-700 divide-y divide-red-700 rounded-lg shadow w-44 border-2 border-red-700 mt-40">
                        <div class="px-4 py-3 text-sm text-white">
                            <div>{{auth()->user()->name}}</div>
                            <div class="font-medium truncate">{{auth()->user()->email}}</div>
                        </div>
                        <ul class="py-2 text-sm text-white">
                            <li >
                                <a href="{{ route("account")}}" class="block px-4 py-2 hover:underline hover:text-red-700 hover:font-bold truncate {{ request()->is("dashboard") ? "active-link" : "" }}">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route("articles.index") }}" class="block px-4 py-2 hover:underline hover:text-red-700 hover:font-bold {{ request()->is("*/articles/*") ? "active-link" : "" }}">Articoli</a>
                            </li>
                            <li>
                                <a href="{{ route("categories.index") }}" class="block px-4 py-2 hover:underline hover:text-red-700 hover:font-bold {{ request()->is("*/categories/*") ? "active-link" : "" }}">Categorie</a>
                            </li>
                            <li>
                                <a href="{{ route("books.index") }}" class="block px-4 py-2 hover:underline hover:text-red-700 hover:font-bold {{ request()->is("*/books/*") ? "active-link" : "" }}">Libri</a>
                            </li>
                        </ul>
                        <div class="hover:bg-red-700 text-white">
                            <form class="py-2" method="POST" action="/logout">
                                @csrf
                                <button type="submit" href="#" class="block px-4 py-2 text-sm text-white hover:underline hover:font-bold w-full">Sign out</button>
                            </form>
                        </div>
                    </div>
            @else
                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-whitefont-medium px-5 py-2.5 text-center " type="button">
                    <i class="fa-solid fa-bars"></i> 
                </button>
    
                <div id="dropdownInformation" class="z-10 hidden bg-slate-700 divide-y divide-gray-100 rounded-lg shadow w-44 border-2 border-red-700 mt-40">
                    <ul class="py-2 text-sm text-white">
                        <li>
                            <a href="/login" class="block px-4 py-2 hover:underline hover:text-red-700 hover:font-bold">Login</a>
                        </li>
                        <li>
                            <a href="/register" class="block px-4 py-2 hover:underline hover:text-red-700 hover:font-bold">Registrati</a>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
            
    </section>
</nav>