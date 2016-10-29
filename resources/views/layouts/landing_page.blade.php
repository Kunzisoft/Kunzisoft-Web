<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials.head._default')
  </head>
  <body id="page-top" class="index">
    @include('layouts.partials.body._nav_landing_page')
    @include('layouts.partials.body._header')

    @yield('content')

    @include('layouts.partials.body._footer')
    @include('layouts.partials.body._js_import')
  </body>
</html>
