@extends("christian.template")

@section("content")


<form action="{{ route('updatepromocion',["id" => $promocion[0]->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input  class="form-control"
      value="{{ $promocion[0]->nombre }}"
       id="email" placeholder="Introduce el nombre de la tarifa" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Descripcion:</label>
        <input class="form-control" 
        value="{{ $promocion[0]->descripcion }}"
        id="email" placeholder="Introduce una pequeña descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="email">Descuento:</label>
        <input class="form-control"
        value="{{ $promocion[0]->descuento }}"
        id="email" placeholder="Introduce el descuento" name="descuento">
    </div>

      <div class="form-group">
        <label for="select">Nombre de las tarifas</label>
        <select name="id_tarifa" id="">
          @foreach ($tarifas as $tarifa)
            <option value="{{ $tarifa->id }}" {{ ( $tarifa->id == $promocion[0]->id_tarifa  ? 'selected' : '' )}}>{{ $tarifa->nombre }}</option>
          @endforeach
        </select> 
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form> 

  
@endsection