<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Management</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include('fragments.navbar')

    <div class="container">
        @yield('content')
    </div>

    @yield('script')
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
</body>
</html>
