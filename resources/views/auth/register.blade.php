@extends('auth.contenido')

@section('login')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/user/registrar">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre(s)') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido(s)') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Nacimineto') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nac" type="date" class="form-control @error('fecha_nac') is-invalid @enderror" name="fecha_nac" value="01-01-1990" min="01-01-1900" max="{{date('d-m-Y')}}" autocomplete="fecha_nac" autofocus>
                                @error('fecha_nac')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="" autocomplete="telefono" autofocus>
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="" autocomplete="direccion" autofocus>
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label text-md-right">{{ __('Carnet de Identidad') }}</label>

                            <div class="col-md-6">
                                <input id="ci" type="text" class="form-control @error('ci') is-invalid @enderror" name="ci" value="" autocomplete="ci" autofocus>
                                @error('ci')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                            <select class="form-select" id="genero" name="genero" aria-describedby="generoFeedback" required>
                              <option selected disabled value="">Elige genero...</option>
                              <option>M</option>
                              <option>F</option>
                              <option>O</option>
                            </select>
                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ERROR</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <input id="id_rol" type="hidden" class="form-control" name="id_rol" value="2" autocomplete="id_rol" autofocus>                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
