<!DOCTYPE html>
<html lang="en">
   <head>
      <title>@yield('title')</title>
      @include('front-end.includes.meta-section')
      @include('front-end.includes.bootstrap')
   </head>
   <body>
      <div class="body-inner">
         @include('front-end.includes.topbar')
         @include('front-end.includes.navbar')

         @yield('content')

         @include('front-end.includes.footer')
         @include('front-end.includes.js-link')
         
      </div>
      <!-- Body inner end -->
   </body>
</html>