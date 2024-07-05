<div class="breadcrumbs text-sm p-5 fixed">
    <ul>
        @php
            $segments = ""
        @endphp
        @foreach(request()->segments() as $key => $segment)
            @php
                $segments .= "/" . $segment
            @endphp
            @if(!is_numeric($segment))
                <li>
                    <a href="{{ $segments }}">{{Str::ucfirst($segment)}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>