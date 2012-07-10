<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Educacion interactiva GD MyRtools</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" /> 
	</head>
	<body >
		<table   id ="iTablaMain" >
			<thead>
				<td id = "iHead1"  >
				</td>
				<td id = "iHead2"  >
				</td>
				<td >
				</td>
			</thead>
			<tbody>
				<tr >
					<td colspan="3" id="iBanner" >
						<div id="iDbanner">
						</div>
					</td>
				</tr>
				<tr>
					<?php 
						include "botones.php";
					?> 
				</tr>
				<tr>
					<td colspan = "2"  id = "iAuxiliar">
						<div id="iDlogo" >
						</div>
					</td>
					<td  id = "iCentro"  >
						<?php 
								include "centroproposito.php";
						?> 
					</td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td colspan = "3" id = "iPiePagina">
						<div id = "iDpiePaginaTexto1">
							<b>Ing. Julian David Guerrero Pinilla</b>
							<br>
							Cel. 301-5407389
							<br>
							Bogota D.C.
						</div>
						<div id = "iDpiePaginaTexto2">
							<b>Ing. Alexandra Medina Rojas </b>
							<br>
							Cel. 300-6178441
							<br>
							Neiva - Huila
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
