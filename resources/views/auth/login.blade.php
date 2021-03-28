@extends('auth.contenido')

@section('login')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group mb-0">
        <div class="card p-4">
          <form class="form-horizontal was-validated" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="card-body">
              <h1>Acceder</h1>
              <p class="text-muted">Control de acceso al sistema</p>
              <div class="form-group mb-3 {{$errors->has('email' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Usuario">
                {!!$errors->first('email','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="form-group mb-4" {{$errors->has('password' ? 'is-invalid' : '')}}>
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-4">Acceder</button>
                </div>
                <div class="col-6 text-right">
                  <button type="button" class="btn btn-link px-0">Olvidaste tu password?</button>
                </div>
              </div>
            </div>
          </form>
          <form action="/registrarse" method="GET">
            <button type="submit" class="btn btn-primary px-4">Crea una cuenta</button>
          </form>
        </div>
        <div id="cardLogin" class="card text-white py-5 d-md-down-none" style="width:44%;">
          <div class="card-body text-center">
            <div>
              <br>
              <br>
              <br>
              <h5 class="text-center font-weight-bold font-italic bg-transparent rounded">Software para la linea de transporte BRT</h5>
              <br>
              
              <p class="text-center font-weight-bold font-italic">
                  Tecnologia Web
                  <br>
                  Grupo: 14SA.
              </p>

              <p class="text-center font-weight-bold font-italic">
                  Santa cruz - Bolivia
              </p>

              <p class="text-center font-weight-bold font-italic">
                <script>
                  const fecha = new Date();
                  document.write(fecha.getHours()+":"+fecha.getMinutes());
                </script>
              </p>

              
                
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection