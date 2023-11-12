@extends('layouts.app')
@section('script1')
    {{ asset('js/validations.js') }}
@endsection

@section('content')
<div class="container">
<h2>Registro de trabajadores</h2>
<form action="{{url('/trabajador')}}" onsubmit="return validar()">
@csrf
@include('trabajadores.form');
</form>
</div>
@endsection