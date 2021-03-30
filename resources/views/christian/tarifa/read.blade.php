@extends('layouts.app')

@section("content")

<h1>Lista de las Tarifas</h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tarifas as $tarifa)
      <tr>
        <td>{{$tarifa->id}}</td>
        <td>{{ $tarifa->nombre }}</td>
        <td>{{ $tarifa->descripcion }}</td>
        <td>{{ $tarifa->precio }}</td>
        <td>
            <a href="{{ route('modifytarifa',["id" => $tarifa->id]) }}" class="btn btn-warning">Modificar</a>
        </td>
        <td>
            <a href=" {{ route('deletetarifa',["id" => $tarifa->id]) }} " class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection