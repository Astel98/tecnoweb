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
        <form id="accion" action="{{ route('editrol','$id') }}" method="get">
        @csrf
            <input type="hidden" class="form-control" id="id" name="id" value= "{{ $u->id }}">
            <button class="bot" type="submit">Editar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
