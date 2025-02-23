{{-- <form class="d-inline" action="{{route('setLocale',$lang)}}" method="POST">
    @csrf
    <button class="btn" type="submit">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang .'.svg') }}" width="32" height="32" alt=""/>
    </button>
</form> --}}

<form class="d-inline" action="{{route('setLocale', $lang)}}" method="POST">
    @csrf
    <button class="btn" type="submit">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang .'.svg') }}"
             width="24"
             height="24"
             alt="{{ strtoupper($lang) }}"
             title="{{ strtoupper($lang) }}"/>
    </button>
</form>