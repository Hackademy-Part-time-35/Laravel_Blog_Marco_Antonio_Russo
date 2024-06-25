@if(session()->has("success"))
    <div class="p-4 mb-4  text-grey-400 rounded-lg text-center bg-green-700 font-bold">
        {{ session("success") }}
    </div>
@elseif(session()->has("error"))
    <div class="p-4 mb-4  text-grey-400 rounded-lg text-center bg-red-800 font-bold">
        {{ session("error") }}
    </div>
@endif