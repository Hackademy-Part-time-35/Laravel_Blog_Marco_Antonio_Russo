@if(session()->has("success"))
    
    <div class="toast toast-end">
        <div class="alert alert-success flex flex-row justify-center gap-1 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
            {{ session("success") }}
        </div>
    </div>

@endif
