@extends('layouts.app')

@section('template_title')
    {{ $tbusuario->name ?? 'Show Tbusuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tbusuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tbusuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $tbusuario->idusuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipousuario:</strong>
                            {{ $tbusuario->idtipousuario }}
                        </div>
                        <div class="form-group">
                            <strong>Ididentificacion:</strong>
                            {{ $tbusuario->ididentificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Identificacion:</strong>
                            {{ $tbusuario->numero_identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $tbusuario->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $tbusuario->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $tbusuario->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $tbusuario->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Usuario:</strong>
                            {{ $tbusuario->nombre_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $tbusuario->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $tbusuario->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $tbusuario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $tbusuario->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
