@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? "{{ __('Show') Contacto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Información del') }} Contacto</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $contacto->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contacto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $contacto->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fnacimiento:</strong>
                            {{ $contacto->fnacimiento}}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            <?php
                            $fecha = Carbon::parse($contacto->fnacimiento);
                            $mfecha = $fecha->month;
                            $dfecha = $fecha->day;
                            $afecha = $fecha->year;
                            ?>
                            <span>{{ $date = Carbon::createFromDate($afecha,$dfecha,$mfecha)->age}}</span>
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $contacto->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $contacto->direccion }}
                        </div>

                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('contactos.index') }}"> {{ __('Atras') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
