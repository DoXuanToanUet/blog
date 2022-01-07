<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <title>Mini Blog</title> --}}
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    @include('layouts.style')
  </head>
  <body>
  
  <div class="site-wrap">

    @include('layouts.header')
   
    @yield('content')

    @include('layouts.footer')
    
  </div>

  @include('layouts.script')


  </body>
</html>