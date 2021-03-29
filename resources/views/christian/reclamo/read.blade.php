@extends("christian.template")

@section("content")

<h1>Lista de las Promociones</h1>
<br>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Motivo</th>
        <th>Descripcion</th>
        <th>ID Bus</th>
        <th>ID Cliente</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reclamos as $reclamo)
      <tr>
        <td>{{$reclamo->id}}</td>
        <td>{{ $reclamo->motivo }}</td>
        <td>{{ $reclamo->descipcion }}</td>
        <td>{{ $reclamo->id_bus }}</td>
        <td>{{ $reclamo->id_cliente }}</td>
        <td>
            <a href="{{ route('modifyreclamo',["id" => $reclamo->id]) }}" class="btn btn-warning">Modificar</a>
        </td>
        <td>
            <a href=" {{ route('deletereclamo',["id" => $reclamo->id]) }} " class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection