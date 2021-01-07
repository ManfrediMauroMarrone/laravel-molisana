<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/43febffcb7.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @include('partials.header')
    <main>
      @yield('content')

    </main>
    @include('partials.footer')
  </body>
</html>
