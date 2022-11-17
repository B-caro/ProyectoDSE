@extends('layouts.app')

@section('template_title')
    {{ $descripcion->name ?? 'Show Descripcion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Descripcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('descripcions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $descripcion->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Nombredescripcion:</strong>
                            {{ $descripcion->nombreDescripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Preciounitario:</strong>
                            {{ $descripcion->precioUnitario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
