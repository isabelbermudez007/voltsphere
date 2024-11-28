@extends('layouts.app')
@section('content')
<div class="car-section d-flex mt-5">
    <!-- FORMULARIO DE BUSQUEDA - imagen ver cliente -->
    <div class="col-1 align-items-center mt-5">
        <img src="../img/iconos/ventas/8.png" alt="Icono 8" class="img-fluid">
    </div>

    <div class="col-3 mt-3">
        <!-- Búsqueda -->
        <div class="container-fluid mb-2 mt-5">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar por nombre"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>

        <div class="container-fluid mb-2">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar por documento"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>

        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar por email"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <!-- ESTADISTICAS -->
    <div class="col-md-8 col-lg-8">
        <h3 class="h3size ms-4">ESTADISTICAS MENSUALES</h3>
        <div class="row mx-auto">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Meses 2024</th>
                        <th scope="col">Autos Vendidos</th>
                        <th scope="col">Consignaciones</th>
                        <th scope="col">TestDrives</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Enero</th>
                        <td>10</td>
                        <td>3</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">Febreo</th>
                        <td>8</td>
                        <td>7</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <th scope="row">Marzo</th>
                        <td>6</td>
                        <td>2</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection