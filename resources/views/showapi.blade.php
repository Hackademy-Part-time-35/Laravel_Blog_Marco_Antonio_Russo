<x-layout title="API">
<x-navbar />




<header class=" p-14 flex flex-col gap-5 ">
        
    <h1 class="text-center font-bold text-5xl mb-10">Articoli</h1>


<div id="root" class="mx-auto flex flex-wrap gap-x-16 gap-y-8 justify-center">
    
    
</div>
<script>
    const root = document.querySelector("#root")
    console.log(root);
    fetch('/api/articles')
    .then(response => response.json())
    .then(data => {

        console.table(data)
        if(data.length == 0){
            root.innerHTML = "<p>Nessun articolo disponibile</p>"
        }else{
            data.forEach(element => {
                if(element.visible){
                    root.innerHTML += `
                    <article class="lg:w-1/3 articleComponent mb-5 md:mb-0 shadow-xl rounded-3xl flex justify-between items-center border-2 border-slate-800 overflow-hidden hover:scale-105 transition-transform duration-75">
                            <div class="p-6 w-1/2 flex flex-col gap-2">
                                <section class="mb-4">
                                    <h3 class="text-2xl font-medium text-red-700">${element.title}</h3>
                                    <h6 class="text-sm"><em>
                                        
                                    </em></h6>
                                </section>
                                <p class="articleComponent">
                                    ${element.description.slice(0,25)}
                                </p>
                        </div>
                        <div class="h-full w-1/2">
                            <img class="h-full rounded-r-2xl object-cover" src="https://savethefrogs.com/wp-content/uploads/placeholder-image-blue-landscape.png" alt="">
                        </div>
                    </article>`
                }
                
            });
        }
        

    })
    .catch(error => {
        console.log(error)
    });
</script>
</header>
</x-layout>