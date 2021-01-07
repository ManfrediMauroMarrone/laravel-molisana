@extends('layouts.app')

@section('content')
  {{-- stampo il titolo del tipo di pasta selezionato tramite l'url --}}
  <div class="container">
    <h1>{{ $formato['titolo'] }}</h1>

  </div>
  <div class="img-pasta">
    <img src="{{ $formato['src-h'] }}" alt="{{ $formato['titolo'] }}">

  </div>
  <div class="confezione">
    <img src="{{ $formato['src-p'] }}" alt="{{ 'confezione ' . $formato['titolo']}}">
  </div>

  <div class="descrizione">
    <div class="container">
      {{-- utilizzo questa formattazione per evitare che si leggano i tag <br> nell'html --}}
      <p class="details">{!! $formato['descrizione'] !!}</p>
    </div>

  </div>
  <div class="info">
    <div class="info-box">
      <i class="fas fa-info"></i>
      <span>{{ $formato['tipo'] }}</span>
    </div>
    <div class="info-box">
      <i class="fas fa-clock"></i>
      <span>{{ $formato['cottura'] }}</span>
    </div>
    <div class="info-box">
      <i class="fas fa-weight-hanging"></i>
      <span>{{ $formato['peso'] }}</span>
    </div>
  </div>

@endsection
