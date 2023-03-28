<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.includes.links')
    @yield('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div id="app">
        @include('layouts.includes.nave')
        @include('layouts.includes.errorMessage')
        <main>
            @yield('content')
        </main>
        @include('layouts.includes.scripts')
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if(session('success'))
    <script>
        swal("{{session('success')}}")
    </script>

    @endif

    @include('layouts.includes.footer') 
</body>

</html>
