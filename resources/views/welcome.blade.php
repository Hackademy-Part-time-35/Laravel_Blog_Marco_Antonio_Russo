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
    
    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

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
                <h2 class="text-2xl">BLOG <span class="text-red-700 font-black">-</span> Marco Antonio Russo</h2>
            </div>
            <ul class="  flex gap-6 text-xl items-center font-medium">
                <li><a class=" active-link" href="/">Home</a></li>
                <li><a  href="./articoli">Articoli</a></li>
                <li><a  href="./contatti">Contatti</a></li>
                <li><a  href="./chi-siamo">Chi siamo</a></li>
            </ul>
        </section>
    </nav>
    {{-- END Navbar --}}
    
    {{-- START Header --}}
    <header class="h-[calc(100vh-5rem)] flex justify-center items-center">
        <h1 class="font-bold text-7xl">Benvenuti</h1>
    </header>
    {{-- END Header --}}
</body>
</html>