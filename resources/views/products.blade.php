{{-- collego il layout di app con Homepage --}}
@extends('layouts.app')

{{-- collego lo yield con il contenuto di Homepage --}}
@section('content')

  <div class="prodotti">
    <div class="container">
      @foreach ($formati as $tipo => $pasta)
        <div class="title">
          <h2 class="tipo-pasta">{{$tipo}}</h2>

        </div>
        <div class="card-container">
          @foreach ($pasta as $key => $tipo_pasta)
            <div class="card">
              <img src="{{ $tipo_pasta['src']}}" alt="{{ $tipo_pasta['titolo'] }}">
              <div class="overlay">
                <a href="{{ route('pagina-dettaglio', ['id' => $key ]) }}">
                  {{ $tipo_pasta['titolo'] }}</a>
                </div>

              </div>
            @endforeach

          </div>

      @endforeach
    </div>
  </div>


@endsection

@section('page-title')
  Prodotti - La Molisana

@endsection
