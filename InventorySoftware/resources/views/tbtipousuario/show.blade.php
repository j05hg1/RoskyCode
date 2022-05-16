@extends('layouts.app')

@section('template_title')
    {{ $tbtipousuario->name ?? 'Show Tbtipousuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tbtipousuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tbtipousuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtipousuario:</strong>
                            {{ $tbtipousuario->idtipousuario }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbtipousuario->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
