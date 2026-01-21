<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Models\Cliente;

class ClienteControllerApi extends Controller
{
    public function store(StoreClientRequest $request): Cliente
    {

        $cliente = Cliente::create($request->all());


        return $cliente;
    }
}
