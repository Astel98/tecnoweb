@extends('layouts.app')

@section("content")

<h1>Lista de las Promociones</h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Descuento</th>
        <th>ID Tarifa</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($promociones as $promocion)
      <tr>
        <td>{{$promocion->id}}</td>
        <td>{{ $promocion->nombre }}</td>
        <td>{{ $promocion->descripcion }}</td>
        <td>{{ $promocion->descuento }}</td>
        <td>{{ $promocion->id_tarifa }}</td>
        <td>
            <a href="{{ route('modifypromocion',["id" => $promocion->id]) }}" class="btn btn-warning">Modificar</a>
        </td>
        <td>
            <a href=" {{ route('deletepromocion',["id" => $promocion->id]) }} " class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection