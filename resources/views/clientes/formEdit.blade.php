@section('content')
    <div class="container-fluid">
        <h1 class="h1size mt-2 ms-5">Modifica tu perfil</h1>
        <div class="row justify-content-center">


            <form class="row g-3 col-md-8 ">
                <div class="col-md-4">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>

                <div class="col-4">
                    <label for="inputEmail" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-6">
                    <label for="inputDirec" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="inputDirec">
                </div>
                <div class="col-md-3">
                    <label for="inputCiudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="inputCiudad">
                </div>
                <div class="col-md-3">
                    <label for="inputEstado" class="form-label">Estado</label>
                    <select id="inputEstado" class="form-select">
                        <option selected>Selecciona...</option>
                        <option>Ciudad Autónoma de Buenos Aires</option>
                        <option>Junin</option>
                        <option>Salta</option>
                        <option>Córdoba</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label for="inputCp" class="form-label">CP</label>
                    <input type="text" class="form-control" id="inputCp">
                </div>

                <div class="col-12">
                    <a href="../index.html" class="btn btn-warning">Enviar</a>
                </div>
            </form>

        </div>
    </div>
@endsection
