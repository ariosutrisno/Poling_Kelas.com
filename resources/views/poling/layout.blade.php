<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets_poling/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_poling/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets_poling/css/style.css') }}">

</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="{{ asset('assets_poling/js/jquery.slim.min.js') }}"></script> --}}
    <script src="{{ asset('assets_poling/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets_poling/js/bootstrap.min.js') }}"></script>
    @yield('container')
</body>

</html>
