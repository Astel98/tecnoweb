@extends('layouts.app')

@section('content')

@if (sizeof($usuarios)==0)
<p>NO SE ENCONTRARON USUARIOS CON LOS CRITERIOS</p>  
@else
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
  @foreach($usuarios as $u)
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
@endif


@if (sizeof($buses)==0)
  <p>NO SE ENCONTRARON BUSES CON LOS CRITERIOS</p>  
@else
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Modelo</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($buses as $b)
    <tr>
      <th scope="row">{{$b->id}}</th>
      <td>{{$b->nombre}}</td>
      <td>{{$b->descripcion}}</td>
      <td>{{$b->modelo}}</td>
      <td>
        <a href="{{ route('editaruser',["id" => $b->id]) }}" class="bot">Editar</a>
      </td>
      <td>
        <a href="{{ route('eliminaruser',["id" => $b->id]) }}" class="bot">Eliminar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endif



@endsection
