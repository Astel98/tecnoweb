@extends('layouts.app')

@section('content')
<div class="container">

<form class="row g-2" action="/user/update" method="post">

  <div class="col-6">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" class="form-control" id="nombre" value= "{{ $user->nombre }}" required>
  </div>

  <div class="col-6">
    <label for="apellido" class="form-label">Apellido(s)</label>
    <input type="text" class="form-control" id="apellido" value="{{ $user->apellido }}" required>
  </div>

  <div class="col-6">
    <label for="password" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="password" value= "" required>
  </div>

  <div class="col-6">
    <label for="confirm" class="form-label">Confirmar contraseña</label>
    <input type="text" class="form-control" id="confirm" value="" required>
  </div>

  <div class="col-6">
    <label for="password" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="password" value= "" required>
  </div>

  <div class="col-6 ">
    <label for="genero" class="form-label">Genero</label>
    <select class="form-select" id="genero" aria-describedby="generoFeedback" required>
      <option selected disabled value="">Elige genero...</option>
      <option>Masculino</option>
      <option>Femenino</option>
      <option>Otro</option>
    </select>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

</div>
@endsection