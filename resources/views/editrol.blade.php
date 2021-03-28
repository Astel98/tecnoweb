@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('updaterol') }}" method="POST">
  @csrf
  @method('POST')
  <input type="hidden" class="form-control" id="id" name="id" value= "{{ $rol->id }}">
  <div>
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value= "{{ $rol->nombre }}" required>
  </div>

  <div>
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $rol->descripcion }}" required>
  </div>  

  <div>
    <button class="bot" type="submit">Confirmar</button>
  </div>
</form>

</div>
@endsection