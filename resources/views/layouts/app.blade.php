<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Molisana</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="{{ asset('images/logo-molisana.png') }}" alt="La Molisana - logo">
      </div>
      <div class="main-menu">
        <ul>
          <li>
            <a href="{{ route('homepage') }}">Home</a>
          </li>
          <li>
            <a href="{{ route('prodotti') }}">Prodotti</a>
          </li>
          <li>
            <a href="#">News</a>
          </li>
        </ul>
      </div>
    </header>
    <main>
      @yield('content')

    </main>
    <footer>
      footer
    </footer>
  </body>
</html>
