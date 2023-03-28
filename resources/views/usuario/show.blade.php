@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuario.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $usuario->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuario->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $usuario->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipousuario Id:</strong>
                            {{ $usuario->tipousuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
