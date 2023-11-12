@extends('layouts.app')

@section('content')
<div class="container">
<h2>Calendario de asistencias</h2>
<a href="{{url('/trabajador')}}" class="btn btn-info">Regresar</a>

<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Dia</th>
            <th>Hora de Entrada</th>
            <th>Hora de salida</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Lunes</td>
            <td>7:00 am</td>
            <td>3:30 pm</td>
        </tr>
        <tr>
            
            <td>Martes</td>
            <td>7:00 am</td>
            <td>3:30 pm</td>
        </tr>
        <tr>
            <td>Miércoles</td>
            <td>7:00 am</td>
            <td>3:30 pm</td>
        </tr>
        <tr>
            <td>Jueves</td>
            <td>7:00 am</td>
            <td>3:30 pm</td>
        </tr>
        <tr>
            <td>Viernes</td>
            <td>7:00 am</td>
            <td>3:30 pm</td>
        </tr>
        <tr>
            <td>Sábado</td>
            <td>7:00 am</td>
            <td>1:30 pm</td>
        </tr>
    </tbody>
</table>
</div>


@endsection