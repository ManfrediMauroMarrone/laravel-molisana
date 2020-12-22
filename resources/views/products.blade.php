{{-- collego il layout di app con Homepage --}}
@extends('layouts.app')

{{-- collego lo yield con il contenuto di Homepage --}}
@section('content')
  <div class="container">
    <div class="title">
      <h2>Le Lunghe</h2>

    </div>
    <div class="card-container">
      @foreach ($pasta as $tipo_pasta)
        <div class="card">
          <img src="{{ $tipo_pasta['src']}}" alt="{{ $tipo_pasta['titolo'] }}">
          <div class="overlay">
            <a href="#">{{ $tipo_pasta['titolo'] }}</a>
          </div>

        </div>
      @endforeach

    </div>
  </div>

@endsection

@section('page-title')
  Prodotti - La Molisana

@endsection
