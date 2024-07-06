<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />


{{-- titolo e pulsante aggiungi --}}
        <h1 class="text-7xl text-center py-10 col-start-3">Categorie</h1>

{{-- Tabella --}}
    <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800" >
        <table class="table">
            
        {{-- head --}}
        <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
            <tr>
            <th class="w-0">Check</th>
            <th>#</th>
            <th>Name</th>
            <th class="text-end pe-36">Actions</th>
            </tr>
        </thead>
        {{-- end head --}}

        {{-- form multiDelete --}}
            <form id="multiDeleteForm" action="{{route("categories.destroyFromMultiselect")}}" method="POST">
            @csrf
            @method('DELETE')

                <div class="flex">
                    <button class="btn btn-outline btn-error rounded-none rounded-tl-3xl text-white w-1/12" type="submit" form="multiDeleteForm">Delete selected</button>
                    <a href="{{ route("categories.create") }}" class="btn btn-outline btn-success col-start-5 w-11/12 rounded-none rounded-tr-3xl">Add Category<i class="fa-solid fa-plus"></i></a>
                </div>

                @foreach($categories as $category)
        {{-- body --}}
                    <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                        <tr class="hover:bg-slate-700">
                            <td class="text-center">
                                <input type="checkbox" class="bg-slate-800 checkbox checkbox-error" name="name[{{$category->id}}]" value="{{ $category->name }}"/>
                            </td>
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            
                            <td class="flex justify-end gap-5">
                                <a href="{{ route("categories.edit", $category)}}" class=" btn btn-outline btn-warning">Modifica</a>

                                {{-- ! NON FUNZIONANTE --}}
                                {{-- <form id="deleteRow" method="POST" action="{{ route("categories.destroy", $category) }}"> @csrf @method('DELETE')
                                    <button form="deleteRow" class="btn btn-outline  btn-error">Elimina</button>
                                </form> --}}
                                {{-- ! NON FUNZIONANTE --}}
                                
                            </td>
                        </tr>
                    </tbody>
        {{-- end body --}}
                @endforeach
            </form>
        {{-- end form multiDelete --}}
        </table>
    </div>
{{-- end Tabella --}}
    
    
</x-layout>