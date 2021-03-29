@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listaroles as $u)
    <tr>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->nombre}}</td>
      <td>{{$u->descripcion}}</td>
      <td>
        <a href="{{ route('editrol',["id" => $u->id]) }}" class="bot">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
