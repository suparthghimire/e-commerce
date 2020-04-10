<!Doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        @include('partials._nav')
    </nav>
    @include('partials._messages')
    @yield('content')

    {{-- <footer class="page-footer font-small bg-dark pt-4 text-light">
        @include('partials._footer')
    </footer> --}}
</body>

@include('partials._scripts')
</html>
