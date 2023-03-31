@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <h4>{{'Hola, '}}{{Auth::user()->name}}</h4>
                        <br/>
                        <div style="text-align: center;">  {{ __('Bienvenido, al sistema administrativo de la Organización Manolo Limitada') }}</div>
                        <br/>
                        <div style="text-align: center;"> {{'Escoge una opción'}}</div>
                        <br/>
                        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal"><i class="bi bi-person-rolodex"></i> Crear Contacto</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li>Desde este modulo crea los nuevos contactos de la organización</li>
                                        </ul>
                                        @auth

                                            <a class="w-100 btn btn-lg btn-outline-primary" href="{{ route('contactos.create') }}"> Ingresar</a>

                                        @endauth
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal">Listar Contactos</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li>Consulta todos los contactos creados en el sistema, editalos y eliminalos</li>
                                        </ul>
                                        <a class="w-100 btn btn-lg btn-outline-primary" href="{{ URL::to('contactos') }}"> Ingresar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                    <div class="card-header py-3 text-bg-primary border-primary">
                                        <h4 class="my-0 fw-normal">Usuarios</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li>Crea usuarios del sistema</li>
                                            <li>Edita usuarios del sistema</li>
                                            <li>Elimina usuarios del sistema</li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        @auth

                                            <a class="w-100 btn btn-lg btn-outline-primary" href="{{ route('users.index') }}"> Ingresar</a>

                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
