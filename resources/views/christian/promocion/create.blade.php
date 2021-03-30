@extends('layouts.app')

@section("content")

<h1>Crear una nueva Promoción</h1>
<br>
<form action="{{ route('showformpromocion') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control" id="email" placeholder="Introduce el nombre de la promocion" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="email">Descuento:</label>
        <input class="form-control" id="email" placeholder="Introduce el descuento Ex. 0.1 significa 10%" name="descuento">
      </div>
    <div class="form-group">
        <label for="select">Nombre de las Tarifas</label>
        <select name="id_tarifa" id="">
          @foreach ($tarifas as $tarifa)
          <option value="{{$tarifa->id}}">{{ $tarifa->nombre }}</option>
          @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection