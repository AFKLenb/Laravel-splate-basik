<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('/assets/css/tooplate-clean-work.css') }}" rel="stylesheet">

    <!--

    Tooplate 2132 Clean Work

    https://www.tooplate.com/view/2132-clean-work

    Free Bootstrap 5 HTML Template

    -->
</head>
<body>
{{-- Подключаем header инклуд --}}
@include('client.include.header')
@include('client.include.navbar')
<main>
    @yield('content')
</main>
@include('client.include.footer')
<!-- JAVASCRIPT FILES -->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('/assets/js/counter.js') }}"></script>
<script src="{{ asset('/assets/js/countdown.js') }}"></script>
<script src="{{ asset('/assets/js/init.js') }}"></script>
<script src="{{ asset('/assets/js/modernizr.js') }}"></script>
<script src="{{ asset('/assets/js/animated-headline.js') }}"></script>
<script src="{{ asset('/assets/js/custom.js') }}"></script>

</body>
</html>
