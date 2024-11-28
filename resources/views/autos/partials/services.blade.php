    <!-- SERVICIOS PREMIUM 1 -->
    <div class="container-fluid">
        <h1 class="h1size mt-2 ms-5">NUEVOS MODELOS</h1>
        <div class="row justify-content-center">
            <!-- Icono 1 -->
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-6 col-md-3 text-center mt-3 mb-3">
                    <img src="{{ asset('/img/autos/' . $i . '.png') }}" alt="Icono {{ $i }}" class="img-fluid">
                </div>
            @endfor
        </div>
    </div>

    <!-- SERVICIOS PREMIUM Parte 2 -->
    <div class="container-fluid">
        <div class="row justify-content-center premium-services-2">
            <!-- Icono 5 -->
            @php
                $textos = [
                    '<p>Excelentes profesionales. <br>Tramites eficientes, <br>seguridad documental.</p>',
                    '<p>En las mejores compañías <br>con excelentes beneficios.</p>',
                    '<p>Prueba la excelencia <br>de nuestra <br>gama exclusiva.</p>',
                    '<p>Tarifas preferenciales <br>para tu flota <br>empresarial.</p>',
                ];
            @endphp
            @for ($i = 5; $i <= 8; $i++)
                <div class="col-6 col-md-3 text-center mt-3 mb-3">
                    <img src="{{ asset('/img/autos/' . $i . '.png') }}" alt="Icono {{ $i }}" class="img-fluid">
                    {!! $textos[$i - 5] !!}
                </div>
            @endfor
        </div>
    </div>