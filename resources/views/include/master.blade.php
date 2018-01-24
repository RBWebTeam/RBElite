<!DOCTYPE html>
<html>
         @include('include.head')
<body>
 
 
             @include('include.header')
             <div class="wrapper">
             @include('include.sidebars')
             <div id="content">
              @yield('content')
             </div>
             </div>
 
  

   
</body>
 @include('include.footer')
 @include('include.script')
</html>
 