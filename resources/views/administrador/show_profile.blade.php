@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8Ka7Ag4-d04Mc99Yzba-polYBS-J3bdw1D7iWnlSlNDPuTOC06uFFM9A8N2VBia5qocU&usqp=CAU" alt="Avatar" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-8">
            <h2>Ismael</h2>
            <p>Apellido: Reyes</p>
            <p>Correo electrónico: ismael@gmail.com</p>
            <p>Contraseña: *******</p>
            <a href="{{url('/home')}}" class="btn btn-info">Regresar</a>
            <a href="{{url('/administrador/edit')}}" class="btn btn-ligh">Modificar</a>
        </div>
    </div>
</div>
@endsection
