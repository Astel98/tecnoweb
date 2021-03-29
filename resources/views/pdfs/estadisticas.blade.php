<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reporte de Buses</title>
        <style>

.pie-chart {
	background:
		radial-gradient(
			circle closest-side,
			transparent 66%,
			white 0
		),
		conic-gradient(
			#4e79a7 0,
			#4e79a7 {{($nro_choferes/$nro_usuarios)*100}}%,
			#f28e2c 0,
			#f28e2c {{(($nro_clientes/$nro_usuarios)*100)+(($nro_choferes/$nro_usuarios)*100)}}%,
			#e15759 0,
			#e15759 {{(($nro_admins/$nro_usuarios)*100)+(($nro_clientes/$nro_usuarios)*100)+(($nro_choferes/$nro_usuarios)*100)}}%
	);
	position: relative;
	width: 500px;
	min-height: 350px;
	margin: 0;
	outline: 1px solid #ccc;
}
.pie-chart h2 {
	position: absolute;
	margin: 1rem;
}
.pie-chart cite {
	position: absolute;
	bottom: 0;
	font-size: 80%;
	padding: 1rem;
	color: gray;
}
.pie-chart figcaption {
	position: absolute;
	bottom: 1em;
	right: 1em;
	font-size: smaller;
	text-align: right;
}
.pie-chart span:after {
	display: inline-block;
	content: "";
	width: 0.8em;
	height: 0.8em;
	margin-left: 0.4em;
	height: 0.8em;
	border-radius: 0.2em;
	background: currentColor;
}

.pie-chart-bus {
	background:
		radial-gradient(
			circle closest-side,
			transparent 66%,
			white 0
		),
		conic-gradient(
			#4e79a7 0,
			#4e79a7 {{($nro_choferes/$nro_usuarios)*100}}%,
			#f28e2c 0,
			#f28e2c {{(($nro_clientes/$nro_usuarios)*100)+(($nro_choferes/$nro_usuarios)*100)}}%,
			#e15759 0,
			#e15759 {{(($nro_admins/$nro_usuarios)*100)+(($nro_clientes/$nro_usuarios)*100)+(($nro_choferes/$nro_usuarios)*100)}}%
	);
	position: relative;
	width: 500px;
	min-height: 350px;
	margin: 0;
	outline: 1px solid #ccc;
}
.pie-chart-bus h2 {
	position: absolute;
	margin: 1rem;
}
.pie-chart-bus cite {
	position: absolute;
	bottom: 0;
	font-size: 80%;
	padding: 1rem;
	color: gray;
}
.pie-chart-bus figcaption {
	position: absolute;
	bottom: 1em;
	right: 1em;
	font-size: smaller;
	text-align: right;
}
.pie-chart-bus span:after {
	display: inline-block;
	content: "";
	width: 0.8em;
	height: 0.8em;
	margin-left: 0.4em;
	height: 0.8em;
	border-radius: 0.2em;
	background: currentColor;
}


    </style>
    </head>
    <body style="background: linear-gradient(to right, rgb(89, 174, 207), rgb(83, 122, 231));">
        <figure class="pie-chart">
            <h2>Grafica torta de usuarios por roles</h2>
            <figcaption>
                Choferes {{$nro_choferes}}<span style="color:#4e79a7"></span><br>
                Clientes {{$nro_clientes}}<span style="color:#f28e2c"></span><br>
                Administradores {{$nro_admins}}<span style="color:#e15759"></span><br>
            </figcaption>
            <cite>Estadistica Roles</cite>
        </figure>
        {{-- <figure class="pie-chart-bus">
            <h2>Grafica torta de buses</h2>
            <figcaption>
                Choferes {{$nro_choferes}}<span style="color:#4e79a7"></span><br>
                Clientes {{$nro_clientes}}<span style="color:#f28e2c"></span><br>
                Administradores {{$nro_admins}}<span style="color:#e15759"></span><br>
            </figcaption>
            <cite>Estadistica Estado Buses</cite>
        </figure> --}}
    </body>
</html>