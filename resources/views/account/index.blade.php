<x-layout title="Dashboard">
<x-navbar />
<main >
    <form id="profileImgForm" action="{{route('user.update',auth()->user()->id)}}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center p-5 gap-10">
    @csrf
    @method('PUT')



    
        <section id="clickAreaProfileImage" onclick="profileImgInput.click()" class="flex items-center w-48 h-48 hover:outline-dashed hover:outline-2 rounded-full outline-gray-700 justify-center object-cover overflow-clip">
            <img id="profileImg" class="rounded-xl" style="pointer-events: none" src="{{Storage::url(auth()->user()->img)}}" alt="profile-img">
            <label id="profileImgLabel" class="opacity-0 flex flex-col absolute text-center text-white font-bold" for="img"><i class="fa-solid fa-plus text-5xl opacity-70 pointer-events-none" ></i>Cambia immagine</label>
            <input onchange="profileImgForm.submit()" draggable="true" type="file" name="img" id="profileImgInput"
            class="w-full h-full file:opacity-0 empty:opacity-0">
        </section>
        
    
    <section>
        <p class="text-5xl" >Benvenuto</p>
        <p class="text-7xl text-red-700">{{auth()->user()->name}} </p>
    </section>
    
        </section>

    </form>
</main>

</x-layout>
