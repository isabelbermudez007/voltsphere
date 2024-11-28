@extends('layouts.app')
@section('title', 'autos')
@section('aside')
    <div class="col-md-4 p-0 mb-5">
        <div id="carouselExampleSlidesOnly " class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner colorFondo">
                <!-- IMAGENES-->
                @for ($i = 1; $i <= 3; $i++)
                    <div class="carousel-item active ">
                        <a href="#"><img src="{{ asset('/img/gral/slider/sl' . $i . '.png') }}" class="d-block w-100"
                                alt="..."></a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
@section('content')

@include('partials.services')
    </div>
    </div>

    <!-- Sección del Auto con imagen centrada -->
    <div class="container-fluid mx-5 mt-5">
        <div class="row ">
            @for ($i = 8; $i >= 5; $i--)
                <div class="col-md-1">
                    <img src="{{ asset('/img/autos/' . $i . '.png') }}" alt="Imagen del Auto" class="img-fluid ">
                    <p>Tarifas preferenciales <br>para tu flota <br>empresarial.</p>
                </div>
            @endfor

            <div class="col-md-3">
                <p class="ps-5">Te brindamos las mejores herramientas para que puedas decidir y elegir
                    seguro, confiado, la compra de tu próximo 0km.
                    Tenemos financiación a la medida de tus necesidades. Servicio postventa integrado
                    Asegura tu auto con nosotros al mejor precio y con la mejor cobertura. Personaliza tu auto con
                    Accesorios Originales.
                    Tomamos tu usado en parte de pago al mejor precio entrega Llave por Llave!</p>
                <p class="ps-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem incidunt quaerat
                    vitae
                    consectetur pariatur voluptas sequi, eligendi doloribus porro fugiat ipsam, placeat architecto
                    mollitia, blanditiis excepturi aliquid quo veniam reprehenderit. voluptas sequi, eligendi
                    doloribus porro fugiat ipsam, placeat architecto
                    mollitia, blanditiis excepturi aliquid quo veniam reprehenderit.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('/img/gral/deautos.png') }}" alt="Imagen del Auto" class="img-fluid ">
            </div>
        </div>
    </div>

@endsection
