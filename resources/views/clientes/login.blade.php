@section('aside')
    <div class="col-md-4 p-0 mb-5 colorFondo">
        <h2 class="text-warning ms-5 mt-2">Ingresar</h2>
        <div class="form-floating mt-5 mb-5 ms-5 me-5">
            <input type="email" class="form-control" id="floatingInput">
            <label for="floatingInput">USUARIO</label>
        </div>
        <div class="form-floating mt-5 mb-3 ms-5 me-5">
            <input type="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">CONTRASEÑA</label>
        </div>
        <div class="ms-5">
            <p class="text-light">Olvidé mi contraseña</p>
        </div>
        <a href="../secciones/clientes.html" class="btn btn-warning ms-5 mb-2">ENTRAR</a>
        <div class="ms-5">
            <p class="text-light">No tenés cuenta todavía ?</p>
        </div>
        <a href="../formularios/formClientesEdit.html" class="btn btn-warning ms-5 mb-2">Crea una ahora</a>
        <h1 class="text-warning text-center">ZONA CLIENTES</h1>
    </div>
@endsection
