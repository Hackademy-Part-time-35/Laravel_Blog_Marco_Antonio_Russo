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
    @vite(["resources/css/app.css"])

    {{-- FontAwesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{Str::ucfirst($article["title"])}}</title>
</head>
<body class=" font-[Montserrat] bg-gradient-to-r from-gray-900 to-gray-700 text-gray-200 mt-16">

    {{-- START Navbar --}}
    <nav class=" border-b-2 border-b-red-700 fixed w-full top-0 left-0">
        <section class=" p-3 flex justify-between bg-gradient-to-r from-slate-800 to-slate-700">
            <div class="flex items-center gap-3">
                <img class=" h-10" src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="laravel-logo">
                <h2 class="text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
            </div>
            <ul class="  flex gap-6 text-xl items-center font-medium">
                <li><a href={{route("homepage")}}>Home</a></li>
                <li><a class=" active-link" href={{route("articles")}}>Articoli</a></li>
                <li><a href={{route("contacts")}}>Contatti</a></li>
                <li><a href={{route("aboutUs")}}>Chi siamo</a></li>
            </ul>
        </section>
    </nav>
    {{-- END Navbar --}}


    {{-- START Main --}}
    <main class="p-10">
        <a class="text-red-600" href={{route("articles")}}><i class="fa-solid fa-chevron-left"></i><em> Torna agli articoli</em></a>
        
        
        <article class="mt-10 px-5 lg:px-60">
            <section class="mb-4">
                <h1 class="text-3xl text-red-700">{{Str::upper($article["title"])}}</h1>
                <h6 class="text-sm"><em>{{$article["category"]}}</em></h6>
            </section>
            <p>{{$article["description"]}}</p>
        </article>
    
    </main>
    {{-- END Main --}}
    
</body>
</html>