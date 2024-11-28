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