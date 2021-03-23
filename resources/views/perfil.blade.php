@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Active</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $user-> nombre." ".$user->apellido}}</h5>
    <p class="card-text">Nacido el: {{ $user-> fecha_nac}}</p>
    <a href="/user/editarPerfil" class="btn btn-primary">Editar perfil</a>
  </div>
</div>
@endsection
