@extends('layouts.app')

@section('template_title')
    Create Tbtipousuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tbtipousuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tbtipousuarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tbtipousuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
