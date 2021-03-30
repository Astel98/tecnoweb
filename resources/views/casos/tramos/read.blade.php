@extends('layouts.app')


@section("content")

<h1>Lista de los tramos</h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>ID ruta</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tramos as $tramo)
      <tr>
        <td>{{$tramo->id}}</td>
        <td>{{ $tramo->nombre }}</td>
        <td>{{ $tramo->descripcion }}</td>
        <td>{{ $tramo->id_ruta }}</td>
        <td>
            <a href="{{ route('modifytramo',["id" => $tramo->id]) }}" class="btn btn-warning">Modificar</a>
        </td>
        <td>
            <a href=" {{ route('deletetramo',["id" => $tramo->id]) }} " class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection