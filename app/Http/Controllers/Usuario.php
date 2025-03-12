<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        return View ('usuario conectado');
    }

    function desconectar(){
        return View ('desconectado');
    }
}
