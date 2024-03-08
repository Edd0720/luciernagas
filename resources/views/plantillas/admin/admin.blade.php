@extends('main-admin')

@section('titulado')

<style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Estilos para las secciones */
    .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    /* Estilos para las tablas */
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f5f5f5;
    }
</style>
<div class="container">
    <div class="section">
        <h2>Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                </tr>
                <!-- Agregar más filas según sea necesario -->
            </tbody>
        </table>
    </div>
    <div class="section">
        <h2>Sucursales</h2>
        <!-- Agregar contenido relacionado con sucursales -->
    </div>
    <div class="section">
        <h2>Disponibilidad</h2>
        <!-- Agregar contenido relacionado con disponibilidad -->
    </div>
</div>
    
@endsection