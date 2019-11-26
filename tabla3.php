<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
	</head>
	<body background="img/s4.jpg">
		<center>
			<table border="3">
				<thead>
					<tr><br><br><br>
						<th colspan="1"><a href="tabla3.html">Regresar</a></th>
						<th colspan="10">&nbsp;&nbsp;ELIMINAR&nbsp;&nbsp; USUARIO</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>NOMBRE</td>
						<td>CORREO</td>
						<td>CONTRASEÑA</td>
						<td colspan="4">EJECUTA</td>
						
					</tr>
					
					<?php
						require('conexion.php');
						$query="SELECT id_user,nombre,correo,contra FROM usuario";
						$resultado=$mysqli->query($query);
						while($row=$resultado->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['id_user']; ?> </td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['correo']; ?></td>
						<td><?php echo $row['contra']; ?></td>		
					
						 <td><a href="modifica3.php?id_user=<?php echo $row['id_user']; ?>">Modificar</a></td>
						 <td><a href="elimina3.php?id_user=<?php echo $row['id_user']; ?>">Eliminar</a></td>

					


					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</center>
	</body>
</html>
				
				