<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('/') }}/frontend/images/favicon.png">
        {{-- <link rel="stylesheet" href="{{ asset('css/all.css') }}"> --}}

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        
        @yield('meta')

        @include('element.style')
        @yield('stylesheetAddon')

    </head>
    <body>

        @include('element.header')

        @yield('content')
        
        @include('element.footer')
        @include('element.script')
            

        @yield('scriptAddon')
    </body>
</html>
