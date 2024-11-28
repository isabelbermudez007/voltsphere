<nav class="navbar navbar-expand-md navbar-dark colorFondo ">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">
            <img src="{{ asset('/img/gral/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="flex-wrap navbar-nav  mt-5">
                <li class="nav-item mx-1">
                    <a class="nav-link {{Request::is('autos') ? 'text-warning' : 'text-light' }}" href="{{route('autos.index')}}">VEHICULOS</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{Request::is('nosotros') ? 'text-warning' : 'text-light' }}" href="#">NOSOTROS</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{Request::is('contacto') ? 'text-warning' : 'text-light' }}" href="#">CONTACTO</a>
                </li>
                <li class="nav-item mx-1 ">
                    <a class="nav-link {{Request::is('clientes') ? 'text-warning' : 'text-light' }}" href="#"> CLIENTES</a>
                </li>
                <li class="nav-item mx-1 ">
                    <a class="nav-link  {{Request::is('ventas') ? 'text-warning' : 'text-light' }}" href="{{route('ventas.index')}}"> VENTAS</a>
                </li>
                <li class="nav-item mx-1 ">
                    <a class="nav-link {{Request::is('sistemas') ? 'text-warning' : 'text-light' }}" href="#"> SISTEMAS</a>
                </li>

            </ul>
        </div>
    </div>
</nav>