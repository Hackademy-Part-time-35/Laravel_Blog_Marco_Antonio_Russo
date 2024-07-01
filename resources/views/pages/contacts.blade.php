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

    {{-- START Main --}}
    <main class=" flex justify-center mt-10 ">
        <form method="POST" action="{{ route("contacts.post") }}" class="w-full md:w-1/2 border border-red-500 p-6 bg-gray-900">
            @csrf
            
            <h2 class="text-2xl pb-3 font-semibold">
                Contattaci
            </h2>
            <x-check-success />
            <div>
                <div class="flex flex-col mb-3">
                    <label for="name">Nome</label>
                    <input name="name" type="text" id="name" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="text" id="email" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("email") border-red-700 @enderror">
                    <x-error-validation name="email" />
                </div>
                <div class="flex flex-col mb-3">
                    <label for="message">Messaggio</label>
                    <textarea name="content" rows="4" id="message" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500"></textarea>
                </div>
                <div class="flex flex-col mb-3">
                    <label for="priority">Priorità</label>
                    <select name="priority" rows="4" id="priority" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500">
                        <option value="low">Bassa</option>
                        <option value="medium">Media</option>
                        <option value="hight">Alta</option>
                    </select>
                </div>
            </div>
            <div class="w-full pt-3">
                <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                Invia
                </button>
            </div>
            </form>
    </main>
    {{-- END Main --}}

</x-layout> 