<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />

    <div class="grid grid-col-5 grid-flow-col items-center">
        <h1 class="text-7xl text-center py-10 col-start-3">Categorie</h1>
        <a href="{{ route("categories.create") }}" class="btn btn-outline btn-success btn-square col-start-5"><i class="fa-solid fa-plus"></i></a>
    </div>

    <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800" >
        <table class="table">
        <!-- head -->
        <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
            <tr>
            <th></th>
            <th>Name</th>
            <th class="text-end pe-36">Actions</th>
            </tr>
        </thead>
        @foreach($categories as $category)
            <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                <tr class="hover:bg-slate-700">
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td class="flex justify-end gap-5">
                        <a href="{{ route("categories.edit", $category)}}" class=" btn btn-warning">Modifica</a>
                        <form method="POST" action="{{ route("categories.destroy", $category) }}"> @csrf @method('DELETE')
                            <button class="btn btn-ghost btn-outline  btn-error">Elimina</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
        </table>
    </div>


    
</x-layout>