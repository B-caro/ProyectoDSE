<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $descripcion->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreDescripcion') }}
            {{ Form::text('nombreDescripcion', $descripcion->nombreDescripcion, ['class' => 'form-control' . ($errors->has('nombreDescripcion') ? ' is-invalid' : ''), 'placeholder' => 'Nombredescripcion']) }}
            {!! $errors->first('nombreDescripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioUnitario') }}
            {{ Form::text('precioUnitario', $descripcion->precioUnitario, ['class' => 'form-control' . ($errors->has('precioUnitario') ? ' is-invalid' : ''), 'placeholder' => 'Preciounitario']) }}
            {!! $errors->first('precioUnitario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>