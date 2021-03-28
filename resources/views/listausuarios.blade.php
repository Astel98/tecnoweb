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
        <form action="/user/editar" method="post">
        @csrf
            <input type="hidden" class="form-control" id="id" name="id" value= "{{ $u->id }}">
            <button class="bot" type="submit">Editar</button>
        </form>
      </td>
      <td>
        <form action="/user/eliminar" method="post">
        @csrf
            <input type="hidden" class="form-control" id="id" name="id" value= "{{ $u->id }}">
            <button class="bot" type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
