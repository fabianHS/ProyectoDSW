<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Fabian</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
  </head>
  <body>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      @include('partials.navbar')
      @yield('content')
      @include('partials.footer')
    </div>
  </body>
</html>
