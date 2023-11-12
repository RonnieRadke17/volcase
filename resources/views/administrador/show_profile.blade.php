@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8Ka7Ag4-d04Mc99Yzba-polYBS-J3bdw1D7iWnlSlNDPuTOC06uFFM9A8N2VBia5qocU&usqp=CAU" alt="Avatar" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-8">
            <h2>Nombre de Usuario</h2>
            <p>Correo electrónico: usuario@example.com</p>
            <p>Fecha de Nacimiento: 01/01/1990</p>
            <p>País: Tu país</p>
            <p>Descripción:</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in lectus eu nulla interdum scelerisque vel eu ligula.</p>
            <a href="{{url('/home')}}" class="btn btn-info">Regresar</a>
        </div>
    </div>
</div>
@endsection
