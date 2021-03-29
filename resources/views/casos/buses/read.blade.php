@extends("casos.template")

@section("content")

<h1>Lista de los buses</h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Modelo</th>
        <th>Capacidad</th>
        <th>Estado</th>
        <th>ID ruta</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($buses as $bus)
      <tr>
        <td>{{$bus->id}}</td>
        <td>{{ $bus->nombre }}</td>
        <td>{{ $bus->descripcion }}</td>
        <td>{{ $bus->modelo }}</td>
        <td>{{ $bus->capacidad }}</td>
        <td>{{ $bus->estado }}</td>
        <td>{{ $bus->id_ruta }}</td>
        <td>
            <a href="{{ route('modifybus',["id" => $bus->id]) }}" class="btn btn-warning">Modificar</a>
        </td>
        <td>
            <a href=" {{ route('deletebus',["id" => $bus->id]) }} " class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection