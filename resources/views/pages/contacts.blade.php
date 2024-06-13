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
    @vite(["resources/css/app.css"])

    <title>{{$title}}</title>
</head>
<body class=" font-[Montserrat] bg-gradient-to-r from-gray-900 to-gray-700 text-gray-200 mt-16">
    
    
    {{-- START Navbar --}}
    <nav class=" border-b-2 border-b-red-700 fixed w-full top-0 left-0">
        <section class=" p-3 flex justify-between bg-gradient-to-r from-slate-800 to-slate-700">
            <div class="flex items-center gap-3">
                <img class=" h-10" src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="laravel-logo">
                <h2 class=" hidden md:block md:text-1xl lg:text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
            </div>
            <ul class="  flex gap-6 text-lg lg:text-xl items-center font-medium">
                <li><a href={{route("homepage")}}>Home</a></li>
                <li><a  href={{route("articles")}}>Articoli</a></li>
                <li><a  href={{route("contacts")}}  class=" active-link" >Contatti</a></li>
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