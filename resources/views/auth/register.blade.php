<x-guest-layout>
    <div class="container-fluid">
        <h1 class="h1size mt-2 ms-5 text-center">Formulario Clientes</h1>
        <div class="row justify-content-center">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <x-text-input name='name' :value="old('name')" type="text" class="form-control" id="inputNombre" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
                </div>
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Apellido</label>
                    <x-text-input name='lastname' :value="old('lastname')" type="text" class="form-control"
                        id="inputLastname" />
                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
               
                    </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo electrónico</label>
                    <x-text-input name='email' :value="old('email')" type="email" class="form-control"
                        id="inputEmail" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
               
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="inputDirec" class="form-label">Dirección</label>
                    <x-text-input name='address' :value="old('address')" type="text" class="form-control"
                        id="inputDirec" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />

                </div>
                <div class="mb-3">
                    <label for="inputCiudad" class="form-label">Ciudad</label>
                    <x-text-input name='city' :value="old('city')" type="text" class="form-control"
                        id="inputCiudad" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />

                </div>
                <div class="mb-3">
                    <label for="inputEstado" class="form-label">Estado</label>
                    <select name='state' id="inputEstado" class="form-select">
                        <option selected>Selecciona...</option>
                        <option :value='CABA' {{ old('state') == 'CABA' ? 'selected' : '' }}>Ciudad Autónoma de
                            Buenos Aires
                        </option>
                        <option :value='Junin' {{ old('state') == 'Junin' ? 'selected' : '' }}>Junin</option>
                        <option :value='Salta' {{ old('state') == 'Salta' ? 'selected' : '' }}>Salta</option>
                        <option :value='Córdoba' {{ old('state') == 'Córdoba' ? 'selected' : '' }}>Córdoba</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputCp" class="form-label">CP</label>
                    <x-text-input name='zip_code' :value="old('zip_code')" type="text" class="form-control"
                        id="inputCp" />
                    <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />

                </div>

                <div class="col-12 text-center mt-3">
                    <x-primary-button class="ms-4">
                        {{ __('Enviar') }}
                    </x-primary-button>

                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
