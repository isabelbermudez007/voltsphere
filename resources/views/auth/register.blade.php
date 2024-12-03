<x-guest-layout>
    <div class="container-fluid">
        <h1 class="h1size text-center mt-2 ms-5">Formulario Clientes</h1>
        <div class="row justify-content-center">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mt-3">
                    <label for="name" class="form-label">Nombre</label>
                    <x-text-input name='name' :value="old('name')" type="text" class="form-control" id="name" />
                </div>
                <div class="mt-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <x-text-input name='lastname' :value="old('lastname')" type="text" class="form-control"
                        id="lastname" />
                </div>

                <div class="mt-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <x-text-input name='email' :value="old('email')" type="email" class="form-control" id="email" />
                </div>
                <div class="mt-3">
                    <label for="address" class="form-label">Dirección</label>
                    <x-text-input name='address' :value="old('address')" type="text" class="form-control" id="address" />
                </div>
                <div class="mt-3">
                    <label for="city" class="form-label">Ciudad</label>
                    <x-text-input name='city' :value="old('city')" type="text" class="form-control" id="city" />
                </div>
                <div class="mt-3">
                    <label for="state" class="form-label">Estado</label>
                    <select name='state' id="state" class="form-select">
                        <option selected>Selecciona...</option>
                        <option :value='CABA' {{ old('state') == 'CABA' ? 'select' : '' }}>Ciudad Autónoma de
                            Buenos Aires
                        </option>
                        <option :value='Junin' {{ old('state') == 'Junin' ? 'select' : '' }}>Junin</option>
                        <option :value='Salta' {{ old('state') == 'Salta' ? 'select' : '' }}>Salta</option>
                        <option :value='Córdoba' {{ old('state') == 'Córdoba' ? 'select' : '' }}>Córdoba</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="zip_code" class="form-label">CP</label>
                    <x-text-input name='zip_code' :value="old('zip_code')" type="text" class="form-control"
                        id="zip_code" />
                </div>

                <div class="mt-3 text-center">
                    <x-primary-button class="ms-4">
                        {{ __('Registrar') }}
                    </x-primary-button>

                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
