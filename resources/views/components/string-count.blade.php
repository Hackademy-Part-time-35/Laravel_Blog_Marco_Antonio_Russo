@if(session()->has("output"))
    <div class="p-4 mb-4  text-grey-500 rounded-lg text-center font-bold bg-orange-600">
        {{ session("output") }}
    </div>
@endif