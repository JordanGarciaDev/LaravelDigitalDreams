@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Ver') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Usuario</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del usuario:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>

                    </div>

                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> {{ __('Atras') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
