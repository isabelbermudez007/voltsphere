<x-guest-layout>
    <div class="container-fluid">
        <h1 class="h1size mt-2 ms-5">Formulario Clientes</h1>
        <div class="row justify-content-center">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-md-4">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <x-text-input name='name' :value="{{ old('name') }}" type="text" class="form-control"
                        id="inputNombre"/>
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Apellido</label>
                    <x-text-input name='lastname' :value="{{ old('lastname') }}" type="text" class="form-control"
                        id="inputEmail4">
                </div>

                <div class="col-4">
                    <label for="inputEmail" class="form-label">Correo electrónico</label>
                    <x-text-input name='email' :value="{{ old('email') }}" type="email" class="form-control"
                        id="inputEmail">
                </div>
                <div class="col-6">
                    <label for="inputDirec" class="form-label">Dirección</label>
                    <x-text-input name='address' :value="{{ old('address') }}" type="text" class="form-control"
                        id="inputDirec">
                </div>
                <div class="col-md-3">
                    <label for="inputCiudad" class="form-label">Ciudad</label>
                    <x-text-input name='city' :value="{{ old('city') }}" type="text" class="form-control"
                        id="inputCiudad">
                </div>
                <div class="col-md-3">
                    <label for="inputEstado" class="form-label">Estado</label>
                    <select name='state' id="inputEstado" class="form-select">
                        <option selected>Selecciona...</option>
                        <option :value='CABA' {{ old('state') == 'CABA' ? 'select' : '' }}>Ciudad Autónoma de Buenos Aires
                        </option>
                        <option :value='Junin' {{ old('state') == 'Junin' ? 'select' : '' }}>Junin</option>
                        <option :value='Salta' {{ old('state') == 'Salta' ? 'select' : '' }}>Salta</option>
                        <option :value='Córdoba' {{ old('state') == 'Córdoba' ? 'select' : '' }}>Córdoba</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label for="inputCp" class="form-label">CP</label>
                    <x-text-input name='zip_code' :value="{{ old('zip_code') }}" type="text" class="form-control"
                        id="inputCp">
                </div>

                <div class="col-12">
                    <x-primary-button class="ms-4">
                        {{ __('E') }}
                    </x-primary-button>
                    
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
