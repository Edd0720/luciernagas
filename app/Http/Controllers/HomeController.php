<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function inicio() {
        return view('home', ['titulo' => 'Luciernagas']);
    }

    function login(){
        return view('login');
    }

    function registro() {
        return view('registro');
    }
}
