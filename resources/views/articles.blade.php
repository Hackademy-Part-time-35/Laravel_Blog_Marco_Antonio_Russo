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
                <li><a href="./">Home</a></li>
                <li><a class=" active-link" href="./articoli">Articoli</a></li>
                <li><a href="./contatti">Contatti</a></li>
                <li><a href="./chi-siamo">Chi siamo</a></li>
            </ul>
        </section>
    </nav>
    {{-- END Navbar --}}
    
    {{-- START Header --}}
    <header class=" p-14 flex flex-col gap-5 ">
        <h1 class="font-bold text-5xl mb-10">Articoli</h1>

        <article class="">
            <h3 class="text-2xl font-medium text-red-700 mb-2">Articolo 1</h3>
            <p class="w-2/5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem minus, sint officia quis odit quisquam asperiores, ut aut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?</p>
        </article>
        
        <article class=" text-end flex flex-col">
            <h3 class="text-2xl font-medium text-red-700 mb-2">Articolo 2</h3>
            <p class="w-2/5 self-end">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem minus, sint officia quis odit quisquam asperiores, ut aut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?</p>
        </article>
        
        <article class="">
            <h3 class="text-2xl font-medium text-red-700 mb-2">Articolo 3</h3>
            <p class="w-2/5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem minus, sint officia quis odit quisquam asperiores, ut aut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?</p>
        </article>
        
        <article class=" text-end  flex flex-col">
            <h3 class="text-2xl font-medium text-red-700 mb-2">Articolo 4</h3>
            <p class="w-2/5 self-end">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus porro eius libero aliquam soluta accusamus laudantium eaque, id impedit vitae dolorem minus, sint officia quis odit quisquam asperiores, ut aut.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iste asperiores quam, accusantium est obcaecati quasi sequi aliquam quibusdam possimus itaque libero rem nostrum soluta. Et vitae autem voluptate numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi quam dicta sunt quaerat commodi aperiam aliquid sed? Suscipit culpa deserunt velit sed placeat nulla facilis. Veritatis minus temporibus animi? Earum?</p>
        </article>
      
     
    </header>
</body>
</html>