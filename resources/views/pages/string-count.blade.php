<x-layout title="Blog Laravel Marco">
    <x-navbar />
    <main class="flex justify-center">
        <form method="POST" action="{{ route("count.string.send") }}" class="w-full md:w-1/2 border border-red-500 p-6 bg-gray-900 mt-10">
            @csrf
            <x-string-count />
            <div class="flex flex-col mb-3">
                <label for="message">Messaggio</label>
                <input type="rext" name="content" rows="4" id="message" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-red-500 focus:outline-none focus:bg-gray-800 focus:text-red-500"></input>
            </div>
            <div class="w-full pt-3">
                <button type="submit" class="w-full bg-gray-900 border border-red-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-red-500 hover:text-white text-xl cursor-pointer">
                Invia
                </button>
            </div>
        </form>
    </main>
</x-layout>