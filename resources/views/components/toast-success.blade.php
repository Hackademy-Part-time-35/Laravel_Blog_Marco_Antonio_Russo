@if(session()->has("success"))
    
    <div class="toast toast-end">
        <div class="alert alert-success flex flex-row justify-center gap-1 items-center text-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
            {{ session("success") }}
        </div>
    </div>

@elseif(session()->has("error"))
    <div class="toast toast-end">
        <div class="alert alert-error flex flex-row justify-center gap-1 items-center text-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            {{ session("error") }}
        </div>
    </div>
@endif
