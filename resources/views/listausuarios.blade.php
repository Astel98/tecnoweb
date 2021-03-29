@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Genero</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listausuarios as $u)
    <tr>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->nombre." ".$u->apellido}}</td>
      <td>{{$u->email}}</td>
      <td>{{$u->genero}}</td>
      <td>
        <a href="{{ route('editaruser',["id" => $u->id]) }}" class="bot">Editar</a>
      </td>
      <td>
        <a href="{{ route('eliminaruser',["id" => $u->id]) }}" class="bot">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
