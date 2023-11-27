@extends('layouts.app')

@section('template_title')
    {{ $worker->name ?? "{{ __('Show') Worker" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Worker</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('worker.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $worker->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $worker->Paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $worker->Materno }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $worker->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $worker->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $worker->Contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
