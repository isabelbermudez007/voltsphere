@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? __('Show') . " " . __('Service') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('services.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id:</strong>
                                    {{ $service->cliente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Empleado Id:</strong>
                                    {{ $service->empleado_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Info:</strong>
                                    {{ $service->info }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Factura:</strong>
                                    {{ $service->factura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $service->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $service->observaciones }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
