@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? __('Show') . " " . __('Empleado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $empleado->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sector Id:</strong>
                                    {{ $empleado->sector_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $empleado->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $empleado->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $empleado->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $empleado->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $empleado->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cumple:</strong>
                                    {{ $empleado->cumple }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Puesto:</strong>
                                    {{ $empleado->puesto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sueldo:</strong>
                                    {{ $empleado->sueldo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Comision Vendedor:</strong>
                                    {{ $empleado->comision_vendedor }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
