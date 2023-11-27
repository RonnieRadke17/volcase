@extends('layouts.app')

@section('template_title')
    Worker
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Worker') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('worker.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Paterno</th>
										<th>Materno</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Contraseña</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workers as $worker)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $worker->Nombre }}</td>
											<td>{{ $worker->Paterno }}</td>
											<td>{{ $worker->Materno }}</td>
											<td>{{ $worker->Correo }}</td>
											<td>{{ $worker->Telefono }}</td>
											<td>{{ $worker->Contraseña }}</td>

                                            <td>
                                                <form action="{{ route('worker.destroy',$worker->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('worker.show',$worker->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('worker.edit',$worker->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $workers->links() !!}
            </div>
        </div>
    </div>
@endsection
