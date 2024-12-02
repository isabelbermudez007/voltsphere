<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
            <input type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id', $reclamo?->cliente_id) }}" id="cliente_id" placeholder="Cliente Id">
            {!! $errors->first('cliente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="empleado_id" class="form-label">{{ __('Empleado Id') }}</label>
            <input type="text" name="empleado_id" class="form-control @error('empleado_id') is-invalid @enderror" value="{{ old('empleado_id', $reclamo?->empleado_id) }}" id="empleado_id" placeholder="Empleado Id">
            {!! $errors->first('empleado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="comentarios" class="form-label">{{ __('Comentarios') }}</label>
            <input type="text" name="comentarios" class="form-control @error('comentarios') is-invalid @enderror" value="{{ old('comentarios', $reclamo?->comentarios) }}" id="comentarios" placeholder="Comentarios">
            {!! $errors->first('comentarios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>