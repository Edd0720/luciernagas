<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/app.css">
   <link rel="icon" href="img/firefly.png">
   <title>{{$titulo}}</title>
</head>
<body>
   <header>
      <nav class="menu">
         <div class="datos">
            <img src="{{ asset("img/firefly.png") }}" class="firefly-icon">
            <a href="">| +52 933 137 4753</a>
         </div>     
         <ul>     
            <li><a href="{{ url('login') }}">Inicio</a></li>
            <li><a href="">Reservar</a></li>
            <li><a href="">Registrarse</a></li>
         </ul>
      </nav>
   </header>
</body>
</html>