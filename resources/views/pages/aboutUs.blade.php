<x-layout :$title>
    
    {{-- START Navbar --}}
    <x-navbar />
    {{-- END Navbar --}}
    


    {{-- START Header --}}
    <header class="h-[calc(100vh-5rem)] flex flex-col items-center gap-8 py-10">
        <h1 class="font-bold text-5xl md:text-7xl mb-10">Il nostro Team</h1>
        <div class=" flex flex-col items-center flex-wrap md:flex-row md:justify-center gap-y-32">
    
            <article class="flex flex-col items-center gap-5">
                <section class=" w-48 h-48 rounded-full overflow-hidden outline-offset-8 outline-4 outline outline-red-700">
                    <img class="" src="{{$marco->img}}" alt="profile-img">
                </section>
                <section class="flex flex-col items-center">
                    <h3 class="text-2xl">{{$marco->name}}</h3>
                    <p class=" text-red-700 font-medium ">{{$marco->aboutUsDescription}}</p>
                </section>
            </article>
        
        </div>
    </header>
    {{-- END Header --}}

</x-layout>