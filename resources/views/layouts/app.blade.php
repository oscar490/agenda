<!doctype html>
<html lang="en">
    @include('layouts.head')

    <body>

        @include('layouts.header')

        @yield('content')


        @include('layouts.scripts')

        @include('layouts.footer')

    </body>
</html>