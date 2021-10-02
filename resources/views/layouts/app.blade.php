<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('inc.head')

<body>
    <div id="app">
        @include('inc.navlogin')

        <main class="py-4">
            @include('sweetalert::alert')
            @yield('content')
        </main>
    </div>
    {{-- <script src="{{ asset(mix('js/myscript.js')) }}"></script> --}}
    @include('inc.masterquery')
    {{-- @include('inc.footeradmin') --}}
</body>
</html>