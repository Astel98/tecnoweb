@extends("casos.template")

@section("content")

<h1>Crear nuevo Bus</h1>
<br>
<form action="{{ route('showformbus') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control" id="email" placeholder="Introduce el nombre del bus" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="email">Modelo:</label>
        <input class="form-control" id="email" placeholder="Introduce el modelo" name="modelo">
    </div>
    <div class="form-group">
        <label for="email">Capacidad:</label>
        <input class="form-control" id="email" placeholder="Introduce la capacidad" name="capacidad">
      </div>
      <div class="form-group">
        <label for="email">Estado:</label>
        <input class="form-control" id="email" placeholder="Introduce el estado" name="estado">
      </div>
    <select name="id_ruta" id="">
        @foreach ($rutas as $ruta)
        <option value="{{$ruta->id}}">{{ $ruta->nombre }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection