<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel ="stylesheet" href="/css/app.css">
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"/>
    <title>@yield('title_block')</title>
  </head>
  <body>
     @include('.inc.header')
     @if(Request::is('/'))
      @include('inc.jumbotron')
     @endif
     <div class="container mt-5">
       <div class="row">
          <div class="col-8">
            @yield('content')
          </div>
          <div class="col-4">
            @include('inc.aside')
          </div>
       </div>

     </div>
     <div class="container">
     @include('.inc.footer')
     </div>
  </body>
</html>
