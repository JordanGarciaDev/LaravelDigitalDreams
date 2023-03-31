@extends('layouts.app')

@section('template_title')
    Contacto
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contactos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contactos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo contacto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cedula</th>
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Fnacimiento</th>
										<th>Telefono</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactos as $contacto)
                                        <?php
                                        $fecha = Carbon::parse($contacto->fnacimiento);
                                        $mfecha = $fecha->month;
                                        $dfecha = $fecha->day;
                                        $afecha = $fecha->year;
                                        ?>
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contacto->cedula }}</td>
											<td>{{ $contacto->nombre }}</td>
											<td>{{ $contacto->apellidos }}</td>
											<td>{{ $contacto->fnacimiento }} ({{ $date = Carbon::createFromDate($afecha,$dfecha,$mfecha)->age}} años)</td>
											<td>{{ $contacto->telefono }}</td>
											<td>{{ $contacto->direccion }}</td>

                                            <td>
                                                <form action="{{ route('contactos.destroy',$contacto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contactos.show',$contacto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contactos.edit',$contacto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contactos->links() !!}
            </div>
        </div>
    </div>
@endsection
