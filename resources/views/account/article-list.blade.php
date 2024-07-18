<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />
    
        <h1 class="text-7xl text-center py-10 col-start-3">{{ $title }}</h1>
        <livewire:search-article />
        <x-toast-success  />
    
</x-layout>