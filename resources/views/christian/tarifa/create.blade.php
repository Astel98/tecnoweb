@extends('layouts.app')

@section("content")

<h1>Crear una nueva Tarifa</h1>
<br>
<form action="{{ route('showformtarifa') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control" id="email" placeholder="Introduce el nombre de la tarifa" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="email">Precio:</label>
        <input class="form-control" id="email" placeholder="Introduce el precio" name="precio">
      </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection