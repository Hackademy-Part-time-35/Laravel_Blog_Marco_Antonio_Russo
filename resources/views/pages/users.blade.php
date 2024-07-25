<x-layout :$title>
<x-navbar />
<div class="flex items-start justify-between px-10">
    
    <div class="flex justify-center items-center w-1/3 mt-20">
        <livewire-user-component />
    </div>

    <div class="w-2/3">
        <livewire-search-user />
    </div>


</div>

</x-layout>