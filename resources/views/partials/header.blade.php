<header>
  <div class="logo">
    <img src="{{ asset('images/logo-molisana.png') }}" alt="La Molisana - logo">
  </div>
  <div class="main-menu">
    <ul>
      <li>
        {{-- con Request::route()->getName() ottengo il nome della route e poi verifico se è equivalente al nome della pagina
        per poter inserire la classe active --}}
        <a class="{{ Request::route()->getName() == 'homepage' ? 'active': ''}}" href="{{ route('homepage') }}">Home</a>
      </li>
      <li>
        <a class="{{ Request::route()->getName() == 'prodotti' ? 'active': ''}}" href="{{ route('prodotti') }}">Prodotti</a>
      </li>
      <li>
        <a href="#">News</a>
      </li>
    </ul>
  </div>
</header>
