<x-layout title="Dashboard">
<x-navbar />
    <main class="flex flex-col justify-center items-center h-[calc(100vh-70px)]">
        <p class="text-5xl">Benvenuto</p>
        <p class="text-7xl text-red-700">{{auth()->user()->name}} </p>
    </main>



</x-layout>
