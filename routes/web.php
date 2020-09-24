<?php

use Illuminate\Support\Facades\Route;




Route::get('/paganti', 'PaganteController@index') -> name('index');
