@extends('layouts.app')

@section("content")


<form action="{{ route('updatereclamo',["id" => $reclamo[0]->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="motivo">Motivo:</label>
      <input  class="form-control"
      value="{{ $reclamo[0]->motivo }}"
       id="email" placeholder="Introduce el nombre de la tarifa" name="motivo">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input class="form-control" 
        value="{{ $reclamo[0]->descipcion }}"
        id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
      <label for="select">Nombre del Bus</label>
      <select name="id_bus" id="">
        @foreach ($buses as $bus)
          <option value="{{ $bus->id }}" {{ ( $bus->id == $reclamo[0]->id_bus  ? 'selected' : '' )}}>{{ $bus->nombre }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form> 

  
@endsection