@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            
                <strong>{{ Session::get('mensaje') }}</strong>
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>
                            <img class="img-thumbnail img-fluid" width="100px"
                                src="{{ asset('storage') . '/' . $empleado->Foto }}" alt="">
                        </td>
                        <td>{{ $empleado->Nombre }}</td>
                        <td>{{ $empleado->Apellido }}</td>
                        <td>{{ $empleado->Correo }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('/empleado/' . $empleado->id . '/edit') }}">EDITAR</a>

                            <form class="d-inline" action="{{ url('/empleado/' . $empleado->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')"
                                    value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $empleados->links()!!}
        <a class="btn btn-success" href="{{ url('/empleado/create') }}">Nuevo ingreso</a>
    </div>
@endsection
