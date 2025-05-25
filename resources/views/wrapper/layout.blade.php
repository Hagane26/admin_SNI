<!DOCTYPE html>
<html>
    <head>
        @include('wrapper.header')
        <title>
            @yield('title')
        </title>
    </head>
    <body>
        @yield('context')

        @include('wrapper.footer')
        @yield('optional')
    </body>
</html>
