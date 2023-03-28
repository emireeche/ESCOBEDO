@extends('layouts.app')

@section('template_title')
    {{ $llanta->name ?? "{{ __('Show') Llanta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Llanta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('llanta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $llanta->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $llanta->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $llanta->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Id:</strong>
                            {{ $llanta->Vehiculo->descripcion}}
                        </div>
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $llanta->Marca->descripcion}}
                        </div>
                        <div class="form-group">
                            <strong>Rodada Id:</strong>
                            {{ $llanta->Rodada->descripcion}}
                        </div>
                        <div class="form-group">
                            <strong>Medida Id:</strong>
                            {{ $llanta->Medida->descripcion}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
