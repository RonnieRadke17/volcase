@extends('layouts.app')

@section('template_title')
    {{ $trabajo->name ?? "{{ __('Show') Trabajo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('trabajos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Trabajo:</strong>
                            {{ $trabajo->Nombre_Trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $trabajo->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $trabajo->Fecha_Inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $trabajo->Fecha_Fin }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $trabajo->Comentario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
