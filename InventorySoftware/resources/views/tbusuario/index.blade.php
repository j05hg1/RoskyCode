@extends('layouts.app')

@section('template_title')
    Tbusuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tbusuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tbusuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idusuario</th>
										<th>Idtipousuario</th>
										<th>Ididentificacion</th>
										<th>Numero Identificacion</th>
										<th>Nombre1</th>
										<th>Nombre2</th>
										<th>Apellido1</th>
										<th>Apellido2</th>
										<th>Nombre Usuario</th>
										<th>Contraseña</th>
										<th>Direccion</th>
										<th>Correo</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbusuarios as $tbusuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbusuario->idusuario }}</td>
											<td>{{ $tbusuario->idtipousuario }}</td>
											<td>{{ $tbusuario->ididentificacion }}</td>
											<td>{{ $tbusuario->numero_identificacion }}</td>
											<td>{{ $tbusuario->nombre1 }}</td>
											<td>{{ $tbusuario->nombre2 }}</td>
											<td>{{ $tbusuario->apellido1 }}</td>
											<td>{{ $tbusuario->apellido2 }}</td>
											<td>{{ $tbusuario->nombre_usuario }}</td>
											<td>{{ $tbusuario->contraseña }}</td>
											<td>{{ $tbusuario->direccion }}</td>
											<td>{{ $tbusuario->correo }}</td>
											<td>{{ $tbusuario->telefono }}</td>

                                            <td>
                                                <form action="{{ route('tbusuarios.destroy',$tbusuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tbusuarios.show',$tbusuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tbusuarios.edit',$tbusuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tbusuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
