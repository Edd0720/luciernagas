<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/user.css">   
    <link rel="icon" href="img/luciernaga.png">
    <title>Perfil</title>
</head>
<body>
    <div class="contenido">
        <header>
            <nav class="menu-user">
                <div class="contenido-menu">
                    <div class="objetos">
                        <ul>
                            <li><img src="img/firefly.png" class="luci"></li>
                            <li><a href="inicio">Inicio</a></li>
                        </ul>
                        <div class="contenido-perfil">
                            <a href="profile">Perfil</a>
                            <div class="foto-perfil">
                                <img src="img/foto-prueba-edu.png" class="luci">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contenido-iconos">
                    <div class="iconos">
                        <a href="reservar"><img src="svg/bell.svg"> Reservar</a>
                        <img src="svg/right-arrow.svg">
                        <a href="reservar"><img src="svg/building.svg">Sucursales</a>
                        <img src="svg/right-arrow.svg">
                        <a href="reservar"><img src="svg/calendar.svg">Fecha</a>
                        <img src="svg/right-arrow.svg">
                        <a href="reservar"><img src="svg/money.svg">Pago</a>
                    </div>
                </div>
            </nav>
        </header>
        <section>
            <div class="debajo">
                <div class="contenido-debajo">
                    @yield('titulo')
                </div>
            </div>
        </section>
    </div>
</body>
</html>
