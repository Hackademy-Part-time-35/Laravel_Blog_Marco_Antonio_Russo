<div class="w-full max-w-sm rounded-lg shadow border-2 bg-gray-800 border-red-700">
    <a href={{ $route }}>
        <div class="flex justify-center">
                <img class="rounded-t-lg p-1 h-[500px] w-[400px]"  src="{{ $img }}" alt="book image" />
        </div>
    </a>
<div class="px-5 pb-5 flex flex-col mt-5">
    <h5 class="text-2xl font-semibold tracking-tight text-grey-800">
        @if( Str::length($title) > 22 )
            {{Str::substr($title,0,22) . "..."}}
        @else
            {{$title}}
        @endif
    </h5>
    <div class="flex items-center mt-2.5 mb-5">
        <x-rank :$rank />
    </div>
    
</div>
</div>
