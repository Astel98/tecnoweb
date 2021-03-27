@extends('layouts.app')

@section('content')
<div class="container">

<form class="row g-2" action="/user/editar2" method="post">
@csrf
<input type="hidden" class="form-control" id="id" name="id" value= "{{ $user->id }}">
  <div class="col-6">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value= "{{ $user->nombre }}" required>
  </div>

  <div class="col-6">
    <label for="apellido" class="form-label">Apellido(s)</label>
    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $user->apellido }}" required>
  </div>

  <div class="col-6">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value= "{{$user->direccion}}" required>
  </div>

  <div class="col-6 ">
    <label for="genero" class="form-label">Seleccione su genero</label>
    <p></p>
    <select class="form-select" id="genero" name="genero" aria-describedby="generoFeedback" required>
      <option selected disabled value="">Elige genero...</option>
      <option>M</option>
      <option>F</option>
      <option>O</option>
    </select>
  </div>

  

  @if($user->id_rol == 1)
    <p> ADMIN </p>
  @elseif($user->id_rol == 2)
    <p> CLIENTE</p>
  @elseif($user->id_rol == 3)
    <p>CHOFER</p>
  @endif

  <div class="col-12">
    <button class="bot" type="submit">Confirmar</button>
  </div>
</form>

</div>
@endsection