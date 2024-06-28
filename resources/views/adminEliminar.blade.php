@extends('layout/plantilla')

@section('tituloPagina','Clases Profesor')

@section('contenido')
<h1>ADMIN SUPREMO</h1><br>

<h3>Alumnos</h3>
<div class="table table-responsive">
    <table class="table table-sm table-bordered">
        <thead>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>password</th>
            <th>editar</th>
            <th>eliminar</th>
        </thead>
        <tbody>
            @foreach ($dataAlum as $data)
            <tr>
                <td>{{ $data->nombre }}</td>
                <td>{{ $data->paterno }} {{ $data->materno }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->password }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h3>Profesores</h3>
<div class="table table-responsive">
    <table class="table table-sm table-bordered">
        <thead>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>password</th>
            <th>editar</th>
            <th>eliminar</th>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

@endsection
