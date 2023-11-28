<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_Trabajo') }}
            {{ Form::text('Nombre_Trabajo', $trabajo->Nombre_Trabajo, ['class' => 'form-control' . ($errors->has('Nombre_Trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Trabajo']) }}
            {!! $errors->first('Nombre_Trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $trabajo->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Inicio') }}
            {{ Form::text('Fecha_Inicio', $trabajo->Fecha_Inicio, ['class' => 'form-control' . ($errors->has('Fecha_Inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('Fecha_Inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Fin') }}
            {{ Form::text('Fecha_Fin', $trabajo->Fecha_Fin, ['class' => 'form-control' . ($errors->has('Fecha_Fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('Fecha_Fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentario') }}
            {{ Form::text('Comentario', $trabajo->Comentario, ['class' => 'form-control' . ($errors->has('Comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
            {!! $errors->first('Comentario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>