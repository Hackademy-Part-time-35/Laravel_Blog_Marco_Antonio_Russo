<x-layout title="Sign Up">
    <x-navbar />


    <main class="flex justify-center items-center m-auto w-1/2 mt-40">
        <form action="/register" method="POST" class=" w-1/2 border border-red-500 p-6 bg-gray-900">
                @csrf
                
                <h2 class="text-2xl pb-3 font-semibold">
                    Registrati
                </h2>
                <x-check-success />
                <div>
                    <div class="flex flex-col mb-3">
                        <label for="name">Nome</label>
                        <input name="name" type="text" id="name" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500" value="{{old("name")}}">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="text" id="email" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("email") border-red-700 @enderror" value="{{old("email")}}">
                        <x-error-validation name="email" />
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="password">Password</label>
                        <input name="password" type="password" id="password" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500 @error("email") border-red-700 @enderror">
                        <x-error-validation name="password" />
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="password_confirmation">Conferma Password</label>
                        <input name="password_confirmation" type="password" id="password_confirmation" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500">
                    </div>
                    
                </div>
                <div class="w-full pt-3">
                    <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                    Invia
                    </button>
                </div>
        </form>
    </main>


</x-layout>