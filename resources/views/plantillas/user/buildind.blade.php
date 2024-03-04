@extends('perfil')

@section('titulo')

    {{-- @foreach ($sucursal as $sucursales) --}}
        <div class="sucursales-tarjeta">
            <div class="frase">
                <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}PERIFERICO</span></h1>
            </div>
            <img src="img/salon-6.jpg" class="imagen-tarjeta">
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A quidem fugiat similique quaerat numquam alias quas sed aut dolorum natus fugit esse corporis ullam incidunt nihil, ipsam consequuntur perferendis earum!
        </div>
        <div class="sucursales-tarjeta">
            <div class="frase">
                <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}PARRILLA</span></h1>
            </div>
            <img src="img/salon-4.jpeg" class="imagen-tarjeta">
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae quidem, harum, non corporis iste impedit perferendis quia repellendus eligendi beatae enim, explicabo quos? Corporis quasi temporibus, eligendi ratione consectetur commodi?
        </div>
        <div class="sucursales-tarjeta">
            <div class="frase">
                <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}CENTRO</span></h1>
            </div>
            <img src="img/salon-1.jpeg" class="imagen-tarjeta">
            <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ipsum sed beatae vel corrupti itaque iure tempora tenetur, nesciunt saepe a laborum quae aspernatur hic recusandae assumenda excepturi minus aut.
        </div>
    {{-- @endforeach --}}
@endsection