@extends('layouts.myapp')
@section('title', 'sistemas')
@section('content2')
    <div class="container-fluid">

        <div class="row justify-content-center">
            <!-- Icono 1 -->
            <div class="col-6 col-md-3 text-center mt-3 mb-3">
                <a href="{{route('empleados.create')}}"><img src="../img/iconos/sistemas/1.png" alt="Icono 1"
                        class="img-fluid"></a>

            </div>
            <!-- Icono 2 -->
            <div class="col-6 col-md-3 text-center mt-3 mb-3">
                <a href="../formularios/formSistemas.html"><img src="../img/iconos/sistemas/2.png" alt="Icono 2"
                        class="img-fluid"></a>

            </div>
            <!-- Icono 3 -->
            <div class="col-6 col-md-3 text-center mt-3 mb-3">
                <a href="../formularios/formSistemas.html"><img src="../img/iconos/sistemas/3.png" alt="Icono 3"
                        class="img-fluid"></a>

            </div>
            <!-- Icono 4 -->
            <div class="col-6 col-md-3 text-center mt-3 mb-3">
                <a href="../formularios/formSistemasEdit.html"><img src="../img/iconos/sistemas/4.png" alt="Icono 4"
                        class="img-fluid"></a>

            </div>
        </div>
    </div>
    <div class="car-section d-flex align-items-center  ms-5 mt-5">
        
        <div class="col-sm-2 align-items-center mt-2">
            <a href="../formularios/formSistemas.html"><img src="../img/iconos/ventas/8.png" alt="Icono 8"
                    class="img-fluid"></a>
        </div>

        <div class="col-sm-10 col-md-4 mt-3">
            <div class="container-fluid mb-2 mt-2 ">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>

            <div class="container-fluid mb-2 ">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar por documento" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>

            <div class="container-fluid ">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar por email" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
