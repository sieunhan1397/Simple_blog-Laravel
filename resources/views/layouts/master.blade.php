<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('head.css')
    <title>@yield('head.title')</title>
</head>
<body>

    @include('partials.navbar')

    @yield('body.content')

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('body.js')
</body>
</html>
