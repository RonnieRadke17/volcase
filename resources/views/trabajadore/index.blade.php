@extends('layouts.app')

@section('template_title')
    Trabajadore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajadore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('trabajadores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombres</th>
										<th>Paterno</th>
										<th>Materno</th>
										<th>Direccion</th>
										<th>Correo</th>
										<th>Contraseña</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trabajadores as $trabajadore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $trabajadore->Nombres }}</td>
											<td>{{ $trabajadore->Paterno }}</td>
											<td>{{ $trabajadore->Materno }}</td>
											<td>{{ $trabajadore->direccion }}</td>
											<td>{{ $trabajadore->Correo }}</td>
											<td>{{ $trabajadore->Contraseña }}</td>
											<td>{{ $trabajadore->telefono }}</td>

                                            <td>
                                                <form action="{{ route('trabajadores.destroy',$trabajadore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('trabajadores.show',$trabajadore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('trabajadores.edit',$trabajadore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $trabajadores->links() !!}
            </div>
        </div>
    </div>
@endsection
