@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{ route('registraruser') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="nombre" class="form-label">Nombre(s)</label>
    <input type="text" class="form-control" id="nombre" name="nombre" 
    value= "" required>
  </div>

  <div class="form-group">
    <label for="apellido" class="form-label">Apellido(s)</label>
    <input type="text" class="form-control" id="apellido" name="apellido" 
    value="" required>
  </div>
  
  <div class="form-group">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" id="email" name="email" 
    value="" required>
  </div>

  <div class="form-group">
    <label for="ci" class="form-label">Numero de CI</label>
    <input type="text" class="form-control" id="ci" name="ci" 
    value="" required>
  </div>

  <div class="form-group">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="telefono" name="telefono" 
    value="" required>
  </div>

  <div class="form-group">
    <label for="fecha_nac" class="form-label">Fecha Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" 
    value="" required>
  </div>

  <div class="form-group">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" 
    value= "" required>
  </div>
  
  <div class="form-group ">
    <label for="genero" class="form-label">Seleccione su genero</label>
    <select class="form-select" id="genero" name="genero" 
    aria-describedby="generoFeedback" required>
      <option selected disabled value="">Elige genero...</option>
      <option>M</option>
      <option>F</option>
      <option>O</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="id_rol" class="form-label">Seleccione su Rol</label>
    <select class="form-select" id="id_rol" name="id_rol" 
    aria-describedby="id_rolFeedback" required>
      <option selected disabled value="">Elige rol...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password" 
    value= "" required>
  </div>

  
  
  <button class="bot" type="submit">Confirmar</button>
</form>

</div>
@endsection