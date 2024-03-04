<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile(){
        return view('perfil', ['titulo' => 'perfil']);
    }

    // FUNCIONES PARA LA SECCION DE ICONOS

    function sucursales() {
        return view('plantillas.user.buildind', ['titulo' => 'sucursales']);
    }
    
    function services() {
        return view('plantillas.user.services', ['titulo' => 'services']);
    }

    function packages() {
        return view('plantillas.user.parties', ['titulo' => 'parties']);
    }

    function reservar() {
        return view('plantillas.user.reservations', ['titulo' => 'reservations']);
    }

}
