@extends('layouts.app')

@section('content')
<div class="container">
<h2>Lista de empleados</h2>
<br>
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">

    {{Session::get('mensaje')}}
    
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<a href="{{url('/worker/create')}}" class="btn btn-success">Añadir</a>
<a href="{{url('/home')}}" class="btn btn-info">Regresar</a>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>contraseña</th>
            <th>Calendario</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><img class="img-thumbnail img-fluid" src="
                https://img.freepik.com/foto-gratis/chico-guapo-seguro-posando-contra-pared-blanca_176420-32936.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699660800&semt=sph
                " width="100" alt=""></td>
            <td>Juan</td>
            <td>Martinez</td>
            <td>Morales</td>
            <td>juanMorales@gmail.com</td>
            <td>**********</td>
            <td>
                <a href="{{url('/trabajador/calendario')}}" class="btn btn-secondary">Ver</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td><img class="img-thumbnail img-fluid" src="
                https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE4h0dQpT7W65j3G0aaTpVYe7dIiRlMqcdNg&usqp=CAU
                " width="100" alt=""></td>
            <td>Ismael</td>
            <td>Islas</td>
            <td>Reyes</td>
            <td>ismaelReyes@gmail.com</td>
            <td>**********</td>
            <td>
                <a href="{{url('/trabajador/calendario')}}" class="btn btn-secondary">Ver</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td><img class="img-thumbnail img-fluid" src="
                https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRISzFUZu6HGJnU-58KFz0YAO6UtqEeP0kFqg&usqp=CAU
                " width="100" alt=""></td>
            <td>Iván</td>
            <td>Villa</td>
            <td>León</td>
            <td>Ivanvilla@gmail.com</td>
            <td>**********</td>
            <td>
                <a href="{{url('/trabajador/calendario')}}" class="btn btn-secondary">Ver</a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection