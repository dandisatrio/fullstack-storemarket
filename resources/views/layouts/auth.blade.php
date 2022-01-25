<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>
  <body>    
    @include('includes.navbar-auth')

    @yield('content')

    @include('includes.footer')

    @include('includes.script')
    @stack('prepend-script')
    @stack('addon-script')
  </body>
</html>
