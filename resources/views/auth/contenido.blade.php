<!DOCTYPE html>
<html lang="es">

<head>
  <title>Sistema BRT</title>

  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
  
</head>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<body id="bodyTheme" class="app flex-row align-items-center tarjeta" style="background: linear-gradient(to right, skyblue, lime); ">
  <div class="container">
    @yield('login')
  </div>

  <script src="{{ asset(mix('js/app.js')) }}"></script>

</body>
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
</html>