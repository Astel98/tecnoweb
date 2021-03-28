<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">BRT</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tarifa
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('vertarifa') }}">Ver Tarifas</a></li>
            <li><a href="{{ route('showformtarifa') }}">Crear una Tarifa</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Promocion
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver Promocion</a></li>
            <li><a href="#">Crear una Promocion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-left"> 
      @yield("content")
    </div>
    <div class="col-sm-2 sidenav">
   
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
 
</footer>

</body>
</html>
