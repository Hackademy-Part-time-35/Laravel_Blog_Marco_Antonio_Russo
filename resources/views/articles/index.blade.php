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
                        <td>
                            @foreach ($article->categories as $category)
                                {{$category->name}}
                            @endforeach
                        </td>
                        <td>
                            <div @class(['badge-success' => $article->visible, "badge" => true, "badge-error" => !$article->visible])>
                                {{ $article->visible == 1? "Visibile" : "Nascosto"}}
                            </div>
                        </td>
                        <td class="flex justify-end items-center gap-5 pe-6">
                            <a href="{{ route("articles.edit", $article)}}" class=" btn btn-warning">Modifica</a>
                            <form method="POST" action="{{ route("articles.destroy", $article) }}"> @csrf @method('DELETE')
                                <button class="btn btn-ghost btn-outline  btn-error">Elimina</button>
                            </form>
                            <a target="_blank" href="{{route("articles.show",$article)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 15 6-6m0 0-6-6m6 6H9a6 6 0 0 0 0 12h3" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>


<x-toast-success />
    
</x-layout>