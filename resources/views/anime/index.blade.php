<x-layout :$title>
    <x-navbar />


{{-- titolo e pulsante aggiungi --}}
        <h1 class="text-7xl text-center py-10 col-start-3">{{ $title }}</h1>

{{-- Tabella --}}
    <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800" >
        <table class="table">
            
        {{-- head --}}
        <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>N° anime</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        {{-- end head --}}


                
                @foreach($genres as $genre)
        {{-- body --}}
                    <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                        <tr class="hover:bg-slate-700">
                            <th>{{ $genre["mal_id"] }}</th>
                            <td>{{ $genre["name"] }}</td>
                            <td>{{ $genre["count"] }}</td>
                            <td class="flex justify-end gap-5">
                                <a href="{{ route("anime.byGenre", [
                                    "genre" => $genre['mal_id'],
                                    "name" => $genre['name']
                                ])}}" class=" btn btn-outline btn-warning btn-sm">Esplora</a>
                            </td>
                        </tr>
                    </tbody>
        {{-- end body --}}
                @endforeach
        {{-- end form multiDelete --}}
        </table>
    </div>
{{-- end Tabella --}}
<x-toast-success />

</x-layout>

