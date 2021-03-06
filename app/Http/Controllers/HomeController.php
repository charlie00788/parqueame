<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = auth()->user();

        if ($usuario->role == 'admin') return view('home.admin', compact('usuario'));
        else return view('home.owner', compact('usuario'));
    }

    public function getPrueba($username, $password)
    {
        $respuesta = [
            'usuario' => $username,
            'password' => $password,
            'logueado' => true,
            'direccion' => 'mi mazo'
        ];

        $res[] = $respuesta;
        $resultado = ['respuesta' => $res];
        return $resultado;
    }
}
