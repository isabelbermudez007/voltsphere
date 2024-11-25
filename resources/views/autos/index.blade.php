<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
</head>

<body class="d-flex justify-content-center align-items-center">

    <!-- Contenedor principal con márgenes izquierdo y derecho -->
    <div class="container-fluid mx-5 mt-5">
        <div class="row ">
            <!-- Carousel-->
            <div class="col-md-4 p-0 mb-5">
                <div id="carouselExampleSlidesOnly " class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner colorFondo">
                        <!-- IMAGENES-->
                        <div class="carousel-item active ">
                            <a href="#"><img src="../img/gral/slider/sl1.png" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="../img/gral/slider/sl2.png" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="../img/gral/slider/sl3.png" class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Sección derecha -->

            <div class="col-md-8  p-0">
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-md navbar-dark colorFondo ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../index.html">
                            <img src="../img/gral/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav  mt-5">
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-warning" href="#">VEHICULOS</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-light" href="#">NOSOTROS</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-light" href="../secciones/contacto.html">CONTACTO</a>
                                </li>
                                <li class="nav-item mx-2 ">
                                    <a class="nav-link text-light" href="../login/logclientes.html">ZONA CLIENTES</a>
                                </li>
                                <li class="nav-item mx-2 ">
                                    <a class="nav-link text-light" href="../login/logventas.html">ZONA VENTAS</a>
                                </li>
                                <li class="nav-item mx-2 ">
                                    <a class="nav-link text-light" href="../login/loginsistemas.html">ZONA SISTEMAS</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- SERVICIOS PREMIUM 1 -->
                <div class="container-fluid">
                    <h1 class="h1size mt-2 ms-5">NUEVOS MODELOS</h1>
                    <div class="row justify-content-center">
                        <!-- Icono 1 -->
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/1.png" alt="Icono 1" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/2.png" alt="Icono 1" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/3.png" alt="Icono 1" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/4.png" alt="Icono 1" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- SERVICIOS PREMIUM Parte 2 -->
                <div class="container-fluid">
                    <div class="row justify-content-center premium-services-2">
                        <!-- Icono 5 -->
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/5.png" alt="Icono 5" class="img-fluid">
                            <p>Excelentes profesionales. <br>Tramites eficientes, <br>seguridad documental.</p>
                        </div>
                        <!-- Icono 6 -->
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/6.png" alt="Icono 6" class="img-fluid">
                            <p>En las mejores compañías <br>con excelentes beneficios.</p>
                        </div>
                        <!-- Icono 7 -->
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/7.png" alt="Icono 7" class="img-fluid">
                            <p>Prueba la excelencia <br>de nuestra <br>gama exclusiva.</p>
                        </div>
                        <!-- Icono 8 -->
                        <div class="col-6 col-md-3 text-center mt-3 mb-3">
                            <img src="../img/autos/8.png" alt="Icono 8" class="img-fluid">
                            <p>Tarifas preferenciales <br>para tu flota <br>empresarial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección del Auto con imagen centrada -->
        <div class="container-fluid mx-5 mt-5">
            <div class="row ">

                <div class="col-md-1">
                    <img src="../img/autos/8.png" alt="Imagen del Auto" class="img-fluid ">
                    <p>Tarifas preferenciales <br>para tu flota <br>empresarial.</p>
                </div>

                <div class="col-md-1">
                    <img src="../img/autos/7.png" alt="Imagen del Auto" class="img-fluid ">
                    <p>Tarifas preferenciales <br>para tu flota <br>empresarial.</p>
                </div>
                <div class="col-md-1">
                    <img src="../img/autos/6.png" alt="Imagen del Auto" class="img-fluid ">
                    <p>Tarifas preferenciales <br>para tu flota <br>empresarial.</p>
                </div>
                <div class="col-md-1">
                    <img src="../img/autos/5.png" alt="Imagen del Auto" class="img-fluid ">
                    <p>El lujo moderno <br>y el confort exquisito.</p>
                </div>
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
                    <img src="../img/gral/deautos.png" alt="Imagen del Auto" class="img-fluid ">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="row colorFondo">
            <div class="col-sm-12 col-md-6">
                <nav class="navbar navbar-expand-md navbar-dark colorFondo ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../index.html">
                            <img src="../img/gral/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav  mt-5">
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-warning" href="#">VEHICULOS</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-light" href="#">NOSOTROS</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-light" href="../secciones/contacto.html">CONTACTO</a>
                                </li>
                                <li class="nav-item mx-2 ">
                                    <a class="nav-link text-light" href="../login/logclientes.html">ZONA CLIENTES</a>
                                </li>
                                <li class="nav-item mx-2 ">
                                    <a class="nav-link text-light" href="../login/logventas.html">ZONA VENTAS</a>
                                </li>
                                <li class="nav-item mx-2 ">
                                    <a class="nav-link text-light" href="../login/loginsistemas.html">ZONA SISTEMAS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-sm-12 col-md-6 text-end p-5 ">
                <h4 class="h4size">Av. Corrientes 2037</h4>
                <h4 class="h4size">Cdad. Autónoma de Buenos Aires</h4>
                <h4 class="h4size">Teléfono 011 5032-0076</h4>
                <h4 class="h4size">Whatsapp - 011 5032-0076</h4>
                <h4 class="h4size">email - contacto@voltsphere.com</h4>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>