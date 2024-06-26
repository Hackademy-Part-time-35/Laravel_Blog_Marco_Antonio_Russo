<div class="w-full max-w-sm rounded-lg shadow border-2 bg-gray-800 border-red-700">
        <div class="flex justify-center"><img class="p-8 h-[500px]" src="{{$img}}" alt="book image" /></div>
    <div class="px-5 pb-5 flex flex-col ">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-grey-800">
                @if( Str::length($title) > 30 )
                    {{Str::substr($title,0,30) . "..."}}
                @else
                    {{$title}}
                @endif
                </h5>
        </a>
        <div class="flex items-center mt-2.5 mb-5">
            <x-rank :$rank />
        </div>
        <div class="flex items-center justify-between">
            <span class="text-xl font-bold  text-grey-800">{{$author}}</span>
            <a href="{{$route}}" class="text-white focus:ring-4 focus:outline-none  rounded-lg text-sm px-5 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-blue-800 font-bold">Di più</a>
        </div>
    </div>
</div>
