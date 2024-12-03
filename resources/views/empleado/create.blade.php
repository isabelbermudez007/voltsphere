<x-guest-layout>
    <div class="container-fluid">
        <h1 class="h1size text-center mt-2 ms-5">Formulario Usuario</h1>
        <div class="row justify-content-center">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-3">
                    <label for="role" class="form-label">Rol</label>
                    <select name="role" id="role" class="form-select">
                        <option selected>Selecciona un rol...</option>
                        <option value="cliente" {{ old('role') == 'cliente' ? 'selected' : '' }}>Cliente</option>
                        <option value="empleado" {{ old('role') == 'empleado' ? 'selected' : '' }}>Empleado</option>
                    </select>
                </div>
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
                    <label for="phone" class="form-label">Teléfono</label>
                    <x-text-input name='phone' :value="old('phone')" type="text" class="form-control" id="phone" />
                </div>

                <div class="mt-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <x-text-input name='email' :value="old('email')" type="email" class="form-control" id="email" />
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <x-text-input name='password' type="password" class="form-control" id="password" />
                </div>
                <div class="mt-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <x-text-input name='password_confirmation' type="password" class="form-control"
                        id="password_confirmation" />
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
                        <option :value='CABA' {{ old('state') == 'CABA' ? 'selected' : '' }}>Ciudad Autónoma de
                            Buenos Aires
                        </option>
                        <option :value='Junin' {{ old('state') == 'Junin' ? 'selected' : '' }}>Junin</option>
                        <option :value='Salta' {{ old('state') == 'Salta' ? 'selected' : '' }}>Salta</option>
                        <option :value='Córdoba' {{ old('state') == 'Córdoba' ? 'selected' : '' }}>Córdoba
                        </option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="zip_code" class="form-label">CP</label>
                    <x-text-input name='zip_code' :value="old('zip_code')" type="text" class="form-control"
                        id="zip_code" />
                </div>
                <div class="campos-empleados form-group mb-2 mb20">
                    <label for="sector_id" class="form-label">{{ __('Sector Id') }}</label>
                    <input type="text" name="sector_id" class="form-control @error('sector_id') is-invalid @enderror"
                        value="{{ old('sector_id', $empleado?->sector_id) }}" id="sector_id" placeholder="Sector Id">
                    {!! $errors->first('sector_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="campos-empleados form-group mb-2 mb20">
                    <label for="cumple" class="form-label">{{ __('Cumple') }}</label>
                    <input type="text" name="cumple" class="form-control @error('cumple') is-invalid @enderror"
                        value="{{ old('cumple', $empleado?->cumple) }}" id="cumple" placeholder="Cumple">
                    {!! $errors->first('cumple', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="campos-empleados form-group mb-2 mb20">
                    <label for="puesto" class="form-label">{{ __('Puesto') }}</label>
                    <input type="text" name="puesto" class="form-control @error('puesto') is-invalid @enderror"
                        value="{{ old('puesto', $empleado?->puesto) }}" id="puesto" placeholder="Puesto">
                    {!! $errors->first('puesto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="campos-empleados form-group mb-2 mb20">
                    <label for="sueldo" class="form-label">{{ __('Sueldo') }}</label>
                    <input type="text" name="sueldo" class="form-control @error('sueldo') is-invalid @enderror"
                        value="{{ old('sueldo', $empleado?->sueldo) }}" id="sueldo" placeholder="Sueldo">
                    {!! $errors->first('sueldo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="campos-empleados form-group mb-2 mb20">
                    <label for="comision_vendedor" class="form-label">{{ __('Comision Vendedor') }}</label>
                    <input type="text" name="comision_vendedor"
                        class="form-control @error('comision_vendedor') is-invalid @enderror"
                        value="{{ old('comision_vendedor', $empleado?->comision_vendedor) }}" id="comision_vendedor"
                        placeholder="Comision Vendedor">
                    {!! $errors->first(
                        'comision_vendedor',
                        '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
                    ) !!}
                </div>
                <div class="mt-3 text-center">
                    <x-primary-button class="ms-4">
                        {{ __('Registrar') }}
                    </x-primary-button>

                </div>

            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const roleSelect = document.getElementById('role');
            const empleadoFields = document.querySelectorAll('.campos-empleados');
            roleSelect.addEventListener('change', function() {
                const selectedRole = roleSelect.value;
                console.log(empleadoFields)
                if (selectedRole === 'cliente') {
                    empleadoFields.forEach(field => field.classList.add('d-none'));
                } else {
                    empleadoFields.forEach(field => field.classList.remove('d-none'));
                }
            });
        });
    </script>
</x-guest-layout>
