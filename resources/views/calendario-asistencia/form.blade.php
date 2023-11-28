<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID_Asistencia') }}
            {{ Form::text('ID_Asistencia', $calendarioAsistencia->ID_Asistencia, ['class' => 'form-control' . ($errors->has('ID_Asistencia') ? ' is-invalid' : ''), 'placeholder' => 'Id Asistencia']) }}
            {!! $errors->first('ID_Asistencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_Trabajador') }}
            {{ Form::text('ID_Trabajador', $calendarioAsistencia->ID_Trabajador, ['class' => 'form-control' . ($errors->has('ID_Trabajador') ? ' is-invalid' : ''), 'placeholder' => 'Id Trabajador']) }}
            {!! $errors->first('ID_Trabajador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_Trabajo') }}
            {{ Form::text('ID_Trabajo', $calendarioAsistencia->ID_Trabajo, ['class' => 'form-control' . ($errors->has('ID_Trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Id Trabajo']) }}
            {!! $errors->first('ID_Trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $calendarioAsistencia->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_Entrada') }}
            {{ Form::text('Hora_Entrada', $calendarioAsistencia->Hora_Entrada, ['class' => 'form-control' . ($errors->has('Hora_Entrada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrada']) }}
            {!! $errors->first('Hora_Entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_Salida') }}
            {{ Form::text('Hora_Salida', $calendarioAsistencia->Hora_Salida, ['class' => 'form-control' . ($errors->has('Hora_Salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida']) }}
            {!! $errors->first('Hora_Salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>