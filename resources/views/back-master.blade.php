<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('back-end.includes.bootstrap')
</head>
<body>
    
    @if(!Request::is('login'))
        @include('back-end.includes.header')
        @include('back-end.includes.sidebar')
    @endif

        @yield('content')

        @include('back-end.includes.js-link')
    @if(!Request::is('login'))
        @include('back-end.includes.footer')
    @endif

</body>
</html>