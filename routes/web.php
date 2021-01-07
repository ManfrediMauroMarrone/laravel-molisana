<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/prodotti', function () {

  $array_pasta = config('pasta');

  // suddivido i formati in base al $tipo_pasta
  $pasta_lunga = array_filter($array_pasta, function($elemento){
    return $elemento['tipo'] == 'lunga';
  });

  $pasta_corta = array_filter($array_pasta, function($elemento){
    return $elemento['tipo'] == 'corta';
  });

  $pasta_cortissima = array_filter($array_pasta, function($elemento){
    return $elemento['tipo'] == 'cortissima';
  });

  $data =[
    // tramite la funzione config recupero l'array dentro il file pasta
    // che si trova nella cartella config
    'formati' => [
      'lunga' => $pasta_lunga,
      'corta' => $pasta_corta,
      'cortissima' => $pasta_cortissima
    ]
  ];
    return view('products', $data);
})->name('prodotti');

// con l'id aggiungo un paramentro variabile all'url
// creo una funzione e gli passo il parametro
// dentro la funzione ho una variabile che si chiama come il parametro dell'url
Route::get('/dettagli-prodotto/{id}', function($id) {
  $array_pasta = config('pasta');
  if (is_numeric($id) && $id > 0 && $id < count($array_pasta)) {
    $prodotto = $array_pasta[$id];

    $data = [
      'formato' => $prodotto
    ];
    return view('dettagli', $data);
  } else {
    // la funzione abort interrompe le azioni di laravel e all'interno posso invicare un 404
    abort('404');
  }
})->name('pagina-dettaglio');
