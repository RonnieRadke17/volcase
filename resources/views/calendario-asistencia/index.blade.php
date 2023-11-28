@extends('layouts.app')

@section('template_title')
    Calendario Asistencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Calendario Asistencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('calendario-asistencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Asistencia</th>
										<th>Id Trabajador</th>
										<th>Id Trabajo</th>
										<th>Fecha</th>
										<th>Hora Entrada</th>
										<th>Hora Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calendarioAsistencias as $calendarioAsistencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $calendarioAsistencia->ID_Asistencia }}</td>
											<td>{{ $calendarioAsistencia->ID_Trabajador }}</td>
											<td>{{ $calendarioAsistencia->ID_Trabajo }}</td>
											<td>{{ $calendarioAsistencia->Fecha }}</td>
											<td>{{ $calendarioAsistencia->Hora_Entrada }}</td>
											<td>{{ $calendarioAsistencia->Hora_Salida }}</td>

                                            <td>
                                                <form action="{{ route('calendario-asistencias.destroy',$calendarioAsistencia->ID_Asistencia) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calendario-asistencias.show',$calendarioAsistencia->ID_Asistencia) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calendario-asistencias.edit',$calendarioAsistencia->ID_Asistencia) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $calendarioAsistencias->links() !!}
            </div>
        </div>
    </div>
@endsection
