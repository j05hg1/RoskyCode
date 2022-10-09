<!-- formulario que se muestra en las vistas crear y editar -->
<h1>{{$modo}} empleado</h1>

<!-- lista los errores en los que requiere ingresar datos en el formulario -->
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>        
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach   
        </ul>
    </div>    
@endif

<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" placeholder="Ingresa el Nombre" value="{{isset($empleado->nombre)?$empleado->nombre:old('Nombre')}}" name="Nombre" id="Nombre">
<br/>
</div>

<div class="form-group">
<label for="Edad"> Edad </label>
<input type="text" class="form-control" placeholder="Ingresa la Edad" value="{{isset($empleado->edad)?$empleado->edad:old('Edad')}}" name="Edad" id="Edad">
<br/>
</div>

<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control" placeholder="Ingresa la Direccion" value="{{isset($empleado->direccion)?$empleado->direccion:old('Direccion')}}" name="Direccion" id="Direccion">
<br/>
</div>

<div class="form-group">
<label for="Telefono"> Telefono </label>
<input type="text" class="form-control" placeholder="Ingresa el Telefono" value="{{isset($empleado->telefono)?$empleado->telefono:old('Telefono')}}" name="Telefono" id="Telefono">
<br/>
</div>

<div class="form-group">
<label for="Email"> Email </label>
<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingresa el Email" value="{{isset($empleado->email)?$empleado->email:old('Email')}}" name="Email" id="Email">
<br/>
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} Datos" id="Enviar">

<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>