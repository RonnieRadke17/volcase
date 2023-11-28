@extends('layouts.app')

@section('template_title')
    {{ $calendarioAsistencia->name ?? "{{ __('Show') Calendario Asistencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Calendario Asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calendario-asistencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Asistencia:</strong>
                            {{ $calendarioAsistencia->ID_Asistencia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Trabajador:</strong>
                            {{ $calendarioAsistencia->ID_Trabajador }}
                        </div>
                        <div class="form-group">
                            <strong>Id Trabajo:</strong>
                            {{ $calendarioAsistencia->ID_Trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $calendarioAsistencia->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Entrada:</strong>
                            {{ $calendarioAsistencia->Hora_Entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida:</strong>
                            {{ $calendarioAsistencia->Hora_Salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
