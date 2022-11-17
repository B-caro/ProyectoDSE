@extends('layouts.app')

@section('template_title')
    Update Descripcion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Descripcion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('descripcions.update', $descripcion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('descripcion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
