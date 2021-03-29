@extends('layouts.app')

@section('content')
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reportes</th>
      <th scope="col">Reportes</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th scope="row">#</th>
      <td>Reporte de Buses</td>
      <td><form action="/reporte/buses" method="GET"><button type="submit" class="bot">Descargar Reporte</button></form></td>
      
    </tr>

    <tr>
      <th scope="row">#</th>
      <td>Reporte de Rutas</td>
      <td><form action="/reporte/rutas" method="GET"><button type="submit" class="bot">Descargar Reporte</button></form></td>
      
    </tr>
    
    <tr>
      <th scope="row">#</th>
      <td>Reporte de Usurarios</td>
      <td><form action="/reporte/usuarios" method="GET"><button type="submit" class="bot">Descargar Reporte</button></form></td>
      
    </tr>

    <tr>
      <th scope="row">#</th>
      <td>Reporte de Clientes</td>
      <td><form action="/reporte/clientes" method="GET"><button type="submit" class="bot">Descargar Reporte</button></form></td>
      
    </tr>

    <tr>
      <th scope="row">#</th>
      <td>Reporte de Estudiantes</td>
      <td><form action="/reporte/estudiantes" method="GET"><button type="submit" class="bot">Descargar Reporte</button></form></td>
      
    </tr>

    <tr>
      <th scope="row">#</th>
      <td>Reporte de Choferes</td>
      <td><form action="/reporte/choferes" method="GET"><button type="submit" class="bot">Descargar Reporte</button></form></td>
      
    </tr>

    <tr>
      <th scope="row">#</th>
      <td>Estadisticas</td>
      <td><form action="/estadistica" method="GET"><button type="submit" class="bot">Ver Estadisticas</button></form></td>
      
    </tr>
    
  </tbody>
</table>
@endsection
