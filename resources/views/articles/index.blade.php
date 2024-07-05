<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />
    <div class="grid grid-col-5 grid-flow-col items-center">
        <h1 class="text-7xl text-center py-10 col-start-3">Articoli</h1>
        <a href="{{ route("articles.create") }}" class="btn btn-outline btn-success btn-square col-start-5"><i class="fa-solid fa-plus"></i></a>
    </div>

    <div class="pb-10">
        <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800">
            <table class="table">
            <!-- head -->
            <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
                <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Visibility</th>
                <th class="text-end pe-40">Actions</th>
                </tr>
            </thead>
            @foreach($articles as $article)
                <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                    <tr class="hover:bg-slate-700">
                        <th>{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category }}</td>
                        <td>
                            <div @class(['badge-success' => $article->visible, "badge" => true, "badge-error" => !$article->visible])>
                                {{ $article->visible == 1? "Visibile" : "Nascosto"}}
                            </div>
                        </td>
                        <td class="flex justify-end gap-5 pe-6">
                            <a href="{{ route("articles.edit", $article)}}" class=" btn btn-warning">Modifica</a>
                            <form method="POST" action="{{ route("articles.destroy", $article) }}"> @csrf @method('DELETE')
                                <button class="btn btn-ghost btn-outline  btn-error">Elimina</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>


    
</x-layout>