@extends("casos.template")

@section("content")

<h1>Crear nuevo Tramo</h1>
<br>
<form action="{{ route('showformtramo') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control" id="email" placeholder="Introduce el nombre del tramo" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <select name="id_ruta" id="">
        @foreach ($rutas as $ruta)
        <option value="{{$ruta->id}}">{{ $ruta->nombre }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection