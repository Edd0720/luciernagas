<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile(){
        return view('plantillas.user.profile', ['titulo' => 'perfil']);
    }

    // FUNCIONES PARA LA SECCION DE ICONOS

    function reservar() {
        return view('plantillas.user.reservations', ['titulo' => 'reservations']);
    }
    

}
