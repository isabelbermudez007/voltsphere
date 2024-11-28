@section('content1')
    @include('partials.services')
@endsection
@section('content2')

<div class="car-section d-flex align-items-center justify-content-center mt-5">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/cards/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/cards/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/cards/3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/cards/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/cards/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/cards/3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/cards/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/cards/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/cards/3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>


    </div>
  </div>
@endsection