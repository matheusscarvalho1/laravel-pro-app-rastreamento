<?php

use App\Http\Controllers\ClienteControllerApi;
use App\Http\Controllers\EtapaControllerApi;
use App\Http\Controllers\FreteControllerApi;
use Illuminate\Support\Facades\Route;

    Route::get('/ping', function () {
        return "Pong!";
    });
    
    Route::post('/clientes', [ClienteControllerApi::class, 'store']);
    Route::post('/fretes', [FreteControllerApi::class, 'store']);
    Route::post('/etapas', [EtapaControllerApi::class, 'store']);

?>