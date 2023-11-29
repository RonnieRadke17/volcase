@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!--aqui va el form-->
        <div class="container mt-5 ">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h2 class="card-title mb-4">Actualiza tu información</h2>
                    <form action="{{url('/administrador/profile')}}" method="get">
                        <div class="form-group">
                            <label for="Nombre"></label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="Apellido"></label>
                            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese su apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="Correo"></label>
                            <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Ingrese su correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="Contraseña"></label>
                            <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Ingrese su contraseña" required>
                        </div>
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary btn-block align-content-center" id="btn">Guardar</button>    
                        </center>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
