<x-layout title="Dashboard">
<x-navbar />
<main >
    <form id="profileImgForm" action="{{route('user.update',auth()->user()->id)}}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center p-5 gap-10">
    @csrf
    @method('PUT')



    
    <section id="clickAreaProfileImage" onclick="profileImgInput.click()" class="flex items-center justify-center object-cover overflow-clip w-48 h-48 rounded-full border-4  border-red-700 p-1 hover:border-none hover:outline-dashed hover:outline-4 hover:outline-offset-4 hover:outline-gray-700 ">
        <img id="profileImg" class="rounded-full" src="{{Storage::url(auth()->user()->img)}}" alt="profile-img">
        <label id="profileImgLabel" class="opacity-0 flex flex-col absolute text-center text-white font-bold" for="img"><i class="fa-solid fa-plus text-5xl opacity-70 pointer-events-none" ></i>Cambia immagine</label>
        <input onchange="profileImgForm.submit()" draggable="true" type="file" name="img" id="profileImgInput"
        class="w-full h-full file:opacity-0 empty:opacity-0">
    </section>
        
    
    <section>
        <p class="text-5xl" >Benvenuto</p>
        <p class="text-7xl text-red-700">{{auth()->user()->name}} </p>
    </section>
    

    </form>
    <section class="flex justify-evenly items-center w-1/2 mx-auto mt-20">
        <a href="{{route("articles.index")}}" class="btn btn-outline btn-primary">Lista Articoli</a>
        <a href="{{route("categories.index")}}" class="btn btn-outline btn-primary">Lista Categorie</a>
        <a href="{{route("books.index")}}" class="btn btn-outline btn-primary">Lista Libri</a>
        <a href="{{route("users.list")}}" class="btn btn-outline btn-primary">Lista Utenti</a>
        <a href="{{route("article.list")}}" class="btn btn-outline btn-primary">Lista Articoli con ricerca</a>
    </section>

</main>

</x-layout>
