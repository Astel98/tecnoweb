<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reporte de Estudiantes</title>
        <style>

        h1{
            text-align: center;
            text-transform: uppercase;
        }

        table {
            font-size: 20px; background: white;
            color: black;
            background-color: white; 
            border: 1px solid black;
            width: 100%;
        }

        th {
            font-size: 20px; background: blue;
            color: black;
            background-color: blue; 
            border: 1px solid black;"
        }

        td {
            font-size: 20px; background: skyblue;
            color: black;
            background-color: skyblue; 
            border: 1px solid black;"
            text-align: center;
        }

        *.texto {
            font-size: 25px;
            font-weight: bold;
            font-family: "Courier New";
            letter-spacing: 3px;
        }


    </style>
    </head>
    <body style="background: linear-gradient(to right, rgb(89, 174, 207), rgb(83, 122, 231));">
        <h1 >Reporte de Estudiantes</h1>
        <hr>
        <div class="texto"> Reporte de {{$cantidad}} Estudiantes</div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Genero</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Rol</th>

                </tr>
              </thead>
              <tbody>
              @foreach($listaestudiantes as $u)
                <tr>
                  <th scope="row">{{$u->id}}</th>
                  <td>{{$u->nombre." ".$u->apellido}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->genero}}</td>
                  @if($u->estado == 1)
                  <td>ACTIVO</td>
                  @else
                  <td>INACTIVO</td>
                  @endif
                  <td>{{$u->direccion}}</td>
                  <td>{{$u->telefono}}</td>
                  <td>Estudiante</td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </body>
</html>