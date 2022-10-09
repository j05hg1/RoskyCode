<!-- Vista de formulario crear empleado -->
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
<!-- 
Laravel genera automáticamente un «token» CSRF para cada sesión de usuario activa manejada por la aplicación. 
Este token es usado para verificar que el usuario autenticado es quien en realidad está haciendo la petición a la aplicación.
-->
@csrf
<!-- indluye el contenido del archivo empleado.form -->
@include('empleado.form',['modo'=>'Crear'])


</form>
</div>
@endsection