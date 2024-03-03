@extends('perfil')

@section('titulo')


    {{-- @foreach ($sucursal as $sucursales) --}}
        <div class="sucursales-tarjeta">
            <div class="frase">
                <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}PERIFERICO</span></h1>
            </div>
            {{-- <img src="img/sucursal-periferico.png" class="imagen-tarjeta"> --}}
        </div>
    {{-- @endforeach --}}
@endsection