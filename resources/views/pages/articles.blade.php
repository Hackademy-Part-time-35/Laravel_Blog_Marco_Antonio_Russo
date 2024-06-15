<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Fonts CDN --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    {{-- CSS --}}
    @vite('resources/css/app.css')


    {{-- JS --}}
    @vite(["resources/js/app.js"])

    {{-- FontAwesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{$title}}</title>
</head>
<body class=" font-[Montserrat] bg-gradient-to-r from-gray-900 to-gray-700 text-gray-200 mt-16">

    {{-- START Navbar --}}
    <nav class=" border-b-2 border-b-red-700 fixed w-full top-0 left-0">
        <section class=" p-3 flex justify-between items-center bg-gradient-to-r from-slate-800 to-slate-700 relative">
            <div class="flex items-center gap-3">
                <a href={{route("articles")}}><img class=" h-10" src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="laravel-logo"></a>
                <h2 class="  md:text-1xl lg:text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
            </div>
            
            
            <i id="navBarsBtn" class="fa-solid fa-bars md:hidden"></i>
            <ul id="navLinks" class="hidden  md:static md:border-0 md:rounded-none md:m-0 md:p-0 md:flex gap-6 text-lg lg:text-xl items-center font-medium">
                <li class="border-b-2 md:border-0"><a href={{route("homepage")}}>Home</a></li>
                <li class="border-b-2 md:border-0"><a class="active-link"  href={{route("articles")}}>Articoli</a></li>
                <li class="border-b-2 md:border-0"><a  href={{route("contacts")}}>Contatti</a></li>
                <li><a  href={{route("aboutUs")}}>Chi siamo</a></li>
            </ul>



        </section>
    </nav>
    
    {{-- END Navbar --}}
    
    {{-- START Header --}}
    <header class=" p-14 flex flex-col gap-5 ">
        <h1 class="font-bold text-5xl mb-10 self-center">Articoli</h1>

    
        
        @if(count($articles) === 0) {{-- Crea per ogni articolo un titolo, la categoria e l'anteprima del contenuto con infine il link all'articolo completo --}}
            <p>Nessun articolo disponibile</p>
        @else
            @php 
                $counterArticles = 0;   // Variabile per alternare vista articoli a dx e sx
            @endphp
            @foreach($articles as $key => $article)

                @if($article["visible"])

                    @if($counterArticles % 2 == 0)  {{-- Alternanza articoli --}}
                        <article class="mb-5 md:mb-0">
                            <section class="mb-4">
                                <h3 class="text-2xl font-medium text-red-700">{{Str::upper($article["title"])}}</h3>
                                <h6 class="text-sm"><em>{{$article["category"]}}</em></h6>
                            </section>
                            <p class=" lg:w-2/5">{{Str::substr($article["description"],0,100)}}...</p>
                            <a class=" text-red-600 underline text-sm" href={{ route('article', $key)}}><i class="fa-solid fa-chevron-right"></i><em> Leggi articolo completo</em></a>
                        </article>
                    @else
                        <article class="mb-5 md:mb-0 text-end flex flex-col">
                            <section class="mb-4">
                                <h3 class="text-2xl font-medium text-red-700">{{Str::upper($article["title"])}}</h3>
                                <h6 class="text-sm"><em>{{$article["category"]}}</em></h6>
                            </section>
                            <p class=" lg:w-2/5 self-end">{{Str::substr($article["description"],0,100)}}...</p>
                            <a class=" text-red-600 underline text-sm" href={{ route('article', $key)}}><i class="fa-solid fa-chevron-right"></i><em> Leggi articolo completo</em></a>
                        </article>
                        
                    @endif

                    @php
                        $counterArticles++;
                    @endphp
                    
                @endif

            @endforeach
        @endif

    
    
    
    </header>
</body>
</html>