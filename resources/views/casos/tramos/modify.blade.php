@extends("casos.template")

@section("content")


<form action="{{ route('updatetramo',["id" => $tramo[0]->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control"
      value="{{ $tramo[0]->nombre }}"
       id="email" placeholder="Introduce el nombre del tramo" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" 
        value="{{ $tramo[0]->descripcion }}"
        id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
   
      <select name="id_ruta" id="">
        @foreach ($rutas as $ruta)
          <option value="{{ $ruta->id }}" {{ ( $ruta->id == $tramo[0]->id_ruta  ? 'selected' : '' )}}>{{ $ruta->nombre }}</option>
        @endforeach
      </select> <br>
      <br>
    <button type="submit" class="btn btn-default">Submit</button>
  </form> 

  
@endsection