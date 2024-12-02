@extends('layouts.app')

@section('template_title')
    {{ $reclamo->name ?? __('Show') . " " . __('Reclamo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reclamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reclamos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id:</strong>
                                    {{ $reclamo->cliente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Empleado Id:</strong>
                                    {{ $reclamo->empleado_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Comentarios:</strong>
                                    {{ $reclamo->comentarios }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
