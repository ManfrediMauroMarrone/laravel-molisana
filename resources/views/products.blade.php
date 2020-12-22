{{-- collego il layout di app con Homepage --}}
@extends('layouts.app')

{{-- collego lo yield con il contenuto di Homepage --}}
@section('content')
  <div class="container">
    <h1>Lista dei prodotti</h1>
    <div class="card-container">
      @foreach ($pasta as $tipo_pasta)
        <div class="card">
          <p>{{ $tipo_pasta['titolo'] }}</p>

        </div>
      @endforeach

    </div>
  </div>

@endsection

@section('page-title')
  Prodotti - La Molisana

@endsection
