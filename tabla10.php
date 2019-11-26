<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
	</head>
	<body background="img/s5.jpg">
		<center>
			<table border="3">
				<thead>
					<tr><br><br><br>
						<th colspan="1"><a href="tabla3.html">Regresar</a></th>
						<th colspan="10">&nbsp;&nbsp;TABLA EMPLEADO</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>NOMBRE</td>
						<td>HORA DE ENTRADA</td>
						<td>HORA DE SALIDA</td>
						<td colspan="4">EJECUTA</td>
						
					</tr>
					
					<?php
						require('conexion.php');
						$query="SELECT id_em,nombre,hora_entrada,hora_salida FROM empleado";
						$resultado=$mysqli->query($query);
						while($row=$resultado->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['id_em']; ?> </td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['hora_entrada']; ?></td>
						<td><?php echo $row['hora_salida']; ?></td>		
					
						 <td><a href="modificar10.php?id_em=<?php echo $row['id_em']; ?>">Modificar</a></td>
						 <td><a href="elimina10.php?id_em=<?php echo $row['id_em']; ?>">Eliminar</a></td>

					


					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</center>
	</body>
</html>
				
				