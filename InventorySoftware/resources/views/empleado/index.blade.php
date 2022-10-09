<!-- Vista de la tabla con acciones de crear, editar y borrar -->
@extends('layouts.app')

@section('content')
<div class="container">


    @if(Session::has('mensaje'))
        <!-- Muestra un mensaje si lo hay -->
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{Session::get('mensaje')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>
        </div>
    @endif  

<a href="{{url('empleado/create')}}" class="btn btn-success" >Registrar Nuevo Empleado</a>
<br/>
<br/>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
        <!-- debe ser con el mismo nombre de cada campo de la BD -->            
        @foreach ($empleados as $empleado)
        <tr>
            
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->edad}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->email}}</td>
            <td>
            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
            Editar
            </a>
            <form action="{{url('/empleado/'.$empleado->id )}}" class="d-inline" method="post">
                <!-- 
                Laravel genera automáticamente un «token» CSRF para cada sesión de usuario activa manejada por la aplicación. 
                Este token es usado para verificar que el usuario autenticado es quien en realidad está haciendo la petición a la aplicación.
                -->
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>    
            </td>
        </tr>    
        @endforeach
                        
    </tbody>
</table>
<!-- mostrara registros de empleados paginados -->
{!! $empleados->links() !!}
</div>
@endsection