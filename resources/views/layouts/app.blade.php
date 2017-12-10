@yield('active-menu')
@if(!isset($activeMenu)) @php $activeMenu = '' @endphp @endif



<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <!-- NOTE: Using Foundation 6.4.2 -->
    <link href="{{ asset('foundation/css/foundation.min.css') }}" rel="stylesheet"></link>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('shared/nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('foundation/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('foundation/js/vendor/what-input.js') }}"></script>
    <script src="{{ asset('foundation/js/vendor/foundation.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
