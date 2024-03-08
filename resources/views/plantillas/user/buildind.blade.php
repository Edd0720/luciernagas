@extends('perfil')

@section('titulo')
  <div class="col-sm-6 mb-sm-0">
      <div class="card">
              <img src="img/sucursal-periferico.png" class="card-img-top" alt="300px">
              <div class="card-body">
                <h5 class="card-title">Tabasco 2000</h5>
                <p class="card-text">Calle la Luna 113
                  Galaxia
                  86035 Villahermosa, Tab.
                  México</p>
                <a href="/sucursal1" class="btn btn-primary">Mas Información</a>
              </div>
      </div>
  </div>
  <div class="col-sm-6 mb-sm-0">
    <div class="card">
      <img src="img/sucursal-periferico.png" class="card-img-top" alt="Paquete 1">
      <div class="card-body">
          <h5 class="card-title">Centro</h5>
          <p class="card-text">
          Avenida 27 de Febrero 113
          Centro
          86000 Villahermosa, Tab.
          México</p>
          <a href="/reservar" class="btn btn-primary">Mas Información</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-sm-0">
      <div class="card">
        <img src="img/sucursal-periferico.png" class="card-img-top" alt="Paquete 1">
        <div class="card-body">
            <h5 class="card-title">Perfiferico</h5>
            <p class="card-text"> Periférico Carlos Pellicer Cámara 2104A
              86150 Villahermosa, Tab.
              México</p>
            <a href="/reservar" class="btn btn-primary">Mas Información</a>
        </div>
      </div>
  </div>

@endsection