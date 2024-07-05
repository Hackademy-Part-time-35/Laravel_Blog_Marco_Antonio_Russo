<x-layout title="Sign In">
    <x-navbar />


    <main class="flex justify-center items-center m-auto w-1/2 py-10">
        <form action="/login" method="POST" class=" w-1/2 border border-red-500 p-6 bg-gray-900">
                @csrf
                
                <h2 class="text-2xl pb-3 font-semibold">
                    Log In
                </h2>
                <x-check-success />
                <div>
                  
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
                  
                    
                </div>
                <div class="w-full pt-3">
                    <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                    Invia
                    </button>
                </div>
        </form>
    </main>


</x-layout>