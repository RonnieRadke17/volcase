@extends('layouts.app')

@section('template_title')
    {{ $trabajadore->name ?? "{{ __('Show') Trabajadore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Trabajadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('trabajadores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $trabajadore->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $trabajadore->Paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $trabajadore->Materno }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $trabajadore->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $trabajadore->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $trabajadore->Contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $trabajadore->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
