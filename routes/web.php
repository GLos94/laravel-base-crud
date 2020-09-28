<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'PaganteController@index') -> name('index');



// esercizio pagamenti DELETE e hash_update

Route::get('/pagamenti', 'PagamentoController@index') -> name('pagamenti.index');

Route::get('/pagamenti/pagamento/delete{id}', 'PagamentoController@destroy') -> name('pagamento.destroy');

Route::get('/pagamenti/pagamento/edit{id}', 'PagamentoController@edit') -> name('pagamento.edit');
Route::post('/pagamenti/pagamento/update{id}', 'PagamentoController@update') -> name('pagamento.update');
