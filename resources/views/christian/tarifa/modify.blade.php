@extends('layouts.app')

@section("content")


<form action="{{ route('updatetarifa',["id" => $tarifa[0]->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control"
      value="{{ $tarifa[0]->nombre }}"
       id="email" placeholder="Introduce el nombre de la tarifa" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" 
        value="{{ $tarifa[0]->descripcion }}"
        id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="email">Precio:</label>
        <input class="form-control"
        value="{{ $tarifa[0]->precio }}"
        id="email" placeholder="Introduce el precio" name="precio">
      </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form> 
@endsection