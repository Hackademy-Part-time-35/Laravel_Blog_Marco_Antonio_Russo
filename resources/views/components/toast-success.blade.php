@if(session()->has("success"))
    
    <div class="toast toast-end">
        <div class="alert alert-success">
        <span>{{session("success")}}</span>
    </div>

@endif
