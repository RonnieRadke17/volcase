@extends('layouts.app')

@section('template_title')
    Trabajos asignados
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('trabajos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Trabajo</th>
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            <td>1</td>
                                            
											<td>Arreglar puerta</td>
											<td>Puerta atorada</td>
											<td>2023-11-27</td>
											<td>2023-11-27</td>
											<td>
                                                <button type="button" onclick="mostrarAlertaComentarios()" class="btn btn-sm btn-success">
                                                    Terminar
                                                </button>
                                            </td>

                                            
                                        </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function mostrarAlertaComentarios() {
            Swal.fire({
                title: 'Enviar Comentarios',
                text: 'Por favor, ingrese sus comentarios:',
                input: 'textarea',
                inputPlaceholder: 'Escriba sus comentarios aquí...',
                showCancelButton: true,
                confirmButtonText: 'Enviar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed && result.value) {
                    Swal.fire({
                        title: 'Comentarios Enviados',
                        text: '¡Gracias por compartir sus comentarios!',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!--se ejecuta este script y le pide la hora de entrada-->
    <script>
        function mostrarVentanaEmergente() {
            Swal.fire({
                title: 'Registro de Tiempo',
                html: '<p>Hora de Entrada: 09:00 AM</p><p>Hora de Salida: 05:00 PM</p>',
                icon: 'info',
                confirmButtonText: 'Aceptar'
            });
        }
        mostrarVentanaEmergente()
    </script>



@endsection
