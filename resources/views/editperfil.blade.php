@extends('layouts.app')

@section('content')
<div class="container">

<form class="row g-2" action="/user/actualizar" method="post">
@csrf
  <div class="col-6">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value= "{{ $user->nombre }}" required>
  </div>

  <div class="col-6">
    <label for="apellido" class="form-label">Apellido(s)</label>
    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $user->apellido }}" required>
  </div>

  <div class="col-6">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" value= "" required>
  </div>

  <div class="col-6">
    <label for="confirm" class="form-label" onchange="check(this)">Confirmar contraseña</label>
    <input type="password" class="form-control" id="confirm" name="confirm" value="" required>
    <script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
  </script>
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

  <div class="col-12">
    <button class="bot" type="submit">Confirmar</button>
  </div>
</form>

</div>
@endsection