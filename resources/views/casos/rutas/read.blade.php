@extends("casos.template")

@section("content")

<h1>Lista de las rutas</h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Lat_ini</th>
        <th>Long_ini</th>
        <th>Lat_fin</th>
        <th>Long_fin</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rutas as $ruta)
      <tr>
        <td>{{$ruta->id}}</td>
        <td>{{ $ruta->nombre }}</td>
        <td>{{ $ruta->descripcion }}</td>
        <td>{{ $ruta->lat_ini }}</td>
        <td>{{ $ruta->long_ini }}</td>
        <td>{{ $ruta->lat_fin }}</td>
        <td>{{ $ruta->long_fin }}</td>
        <td>
            <a href="{{ route('modifyruta',["id" => $ruta->id]) }}" class="btn btn-warning">Modificar</a>
        </td>
        <td>
            <a href=" {{ route('deleteruta',["id" => $ruta->id]) }} " class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection