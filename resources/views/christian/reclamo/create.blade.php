@extends("christian.template")

@section("content")

<h1>Crear una nuevo Reclamo</h1>
<br>
<form action="{{ route('showformreclamo') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="motivo">Motivo:</label>
      <input  class="form-control" id="email" placeholder="Introduce el nombre de la promocion" name="motivo">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input class="form-control" id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
      	<label for="select">Nombre del Bus</label>
        <select name="id_bus" id="">
          @foreach ($buses as $bus)
          <option value="{{$bus->id}}">{{ $bus->nombre }}</option>
          @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection