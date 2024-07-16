<x-layout :$title>
    <x-navbar />
    <x-breadcrumbs />
    
        <h1 class="text-7xl text-center py-10 col-start-3">Articoli</h1>

    <div class="pb-10">
        <div class="overflow-x-auto md:w-3/5 mx-auto rounded-3xl shadow-xl border border-gray-800">
            <table class="table">
            <!-- head -->
            <thead class="bg-neutral text-neutral-content text-base bg-gradient-to-r from-slate-900 to-slate-800">
                <tr>
                <th>Check</th>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Visibility</th>
                <th class="text-end">Actions</th>
                </tr>
            </thead>

            <form id="deleteMultiForm" action="{{ route("articles.destroyFromMultiselect") }}" method="POST">
                <div class="flex">
                    @csrf
                    @method('DELETE')
    
                    <button form="deleteMultiForm" class="btn btn-outline btn-error rounded-none rounded-tl-3xl text-white w-1/12" type="submit">Delete selected</button>
                    
                    <a href="{{ route("articles.create") }}" class="btn btn-outline btn-success border-1 col-start-5 w-11/12 rounded-none rounded-tr-3xl">Aggiungi Articolo<i class="fa-solid fa-plus"></i></a>
                </div>
            </form>
            
            @foreach($articles as $article)
                <tbody class="bg-gradient-to-r from-slate-800 to-slate-700">
                    <tr class="hover:bg-slate-700">
                        <td class="text-start">
                            <input form="deleteMultiForm" type="checkbox" class="bg-slate-800 checkbox checkbox-error" name="ids[]" value="{{ $article->id }}"/>
                        </td>
                        <th>{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>
                            @foreach ($article->categories as $category)
                                {{$category->name}}
                            @endforeach
                        </td>
                        <td>
                            <div class="flex gap-2 items-center">
                                            <i @class([
                                                "fa-eye text-success" => $article->visible,
                                                "fa-eye-slash text-error" => !($article->visible),
                                                "fa-regular", 
                                                "mx-auto",
                                                "text-xl"
                                            ])></i>
                            </div>
                        </td>
                        <td class="flex justify-end items-center gap-5 pe-6 font-">
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