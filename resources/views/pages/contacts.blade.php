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


    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- CSS --}}
    @vite('resources/css/app.css')


    {{-- JS --}}
    @vite(["resources/js/app.js"])

    <title>{{$title}}</title>
</head>
<body class=" font-[Montserrat] bg-gradient-to-r from-gray-900 to-gray-700 text-gray-200 mt-16">
    
    
    {{-- START Navbar --}}
    <nav class=" border-b-2 border-b-red-700 fixed w-full top-0 left-0">
        <section class=" p-3 flex justify-between items-center bg-gradient-to-r from-slate-800 to-slate-700 relative">
            <div class="flex items-center gap-3">
                <a href={{route("contacts")}}><img class=" h-10" src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="laravel-logo"></a>
                <h2 class="  md:text-1xl lg:text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
            </div>
            
            
            <i id="navBarsBtn" class="fa-solid fa-bars md:hidden"></i>
            <ul id="navLinks" class="hidden  md:static md:border-0 md:rounded-none md:m-0 md:p-0 md:flex gap-6 text-lg lg:text-xl items-center font-medium">
                <li class="border-b-2 md:border-0"><a href={{route("homepage")}}>Home</a></li>
                <li class="border-b-2 md:border-0"><a href={{route("articles")}}>Articoli</a></li>
                <li class="border-b-2 md:border-0"><a class="active-link" href={{route("contacts")}}>Contatti</a></li>
                <li><a  href={{route("aboutUs")}}>Chi siamo</a></li>
            </ul>



        </section>
    </nav>
    
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
</body>
</html>