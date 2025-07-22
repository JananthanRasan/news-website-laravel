<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <style>
        @stack('styles');
    </style>

</head>

<body>

    @include('layouts.header')

    <h1 class="text-center" id="title">Welcome
        @if (@isset($name))
            {{ $name }}
        @else
            Yarl IT
        @endif
    </h1>

    @yield('content')

    @include('layouts.footer')

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="{{ asset('js/index.bundle.js') }}"></script>
</body>

</html>
