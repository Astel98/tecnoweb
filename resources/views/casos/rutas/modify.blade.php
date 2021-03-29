@extends("casos.template")

@section("content")


<form action="{{ route('updateruta',["id" => $ruta[0]->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control"
      value="{{ $ruta[0]->nombre }}"
       id="email" placeholder="Introduce el nombre de la ruta" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" 
        value="{{ $ruta[0]->descripcion }}"
        id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="email">Lat_ini:</label>
        <input class="form-control"
        value="{{ $ruta[0]->lat_ini }}"
        id="email" placeholder="Introduce la latitud inicial" name="lat_ini">
    </div>
    <div class="form-group">
        <label for="email">Long_ini:</label>
        <input class="form-control"
        value="{{ $ruta[0]->long_ini }}"
        id="email" placeholder="Introduce la longitud inicial" name="long_ini">
    </div>
    <div class="form-group">
        <label for="email">Lat_fin:</label>
        <input class="form-control"
        value="{{ $ruta[0]->lat_fin }}"
        id="email" placeholder="Introduce la latitud final" name="lat_fin">
    </div>
    <div class="form-group">
        <label for="email">Long_fin:</label>
        <input class="form-control"
        value="{{ $ruta[0]->long_fin }}"
        id="email" placeholder="Introduce la longitud final" name="long_fin">
    </div>
      
    <button type="submit" class="btn btn-default">Submit</button>
  </form> 

  
@endsection