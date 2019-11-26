<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
	</head>
	<body background="img/s7.jpg">
		<center>
			<table border="3">
				<thead>
					<tr><br><br><br>
						<th colspan="1"><a href="tabla3.html">Regreso</a></th>
						<th colspan="10">&nbsp;&nbsp;TABLA DE CITAS @NLINE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>FECHA</td>
						<td>HORA</td>
						<td>SERVICIO</td>
						<td colspan="4">EJECUTA</td>
						
					</tr>
					
					<?php
						require('conexion.php');
						$query="SELECT id_cita,fecha,hora,servicio FROM cita";
						$resultado=$mysqli->query($query);
						while($row=$resultado->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['id_cita']; ?> </td>
						<td><?php echo $row['fecha']; ?></td>
						<td><?php echo $row['hora']; ?></td>
						<td><?php echo $row['servicio']; ?></td>		
					
						 <td><a href="modificar11.php?id_cita=<?php echo $row['id_cita']; ?>">Modificar</a></td>
						 <td><a href="elimina11.php?id_cita=<?php echo $row['id_cita']; ?>">Eliminar</a></td>

					


					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</center>
	</body>
</html>
				
				